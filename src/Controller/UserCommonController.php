<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserCommonController extends AbstractController
{

    /**
     * @Route("/api/getUserInfos/{id}", name="user_infos_show", methods={"GET"})
     */
    public function getUserById($id, UserRepository $repoUser)
    {
        $user = $repoUser->findOneById($id);
        if ($user) {
            if ($user->getAdmin()) {
                return $this->json($user->getAdmin(), 200, [], ['groups' => 'admin:read']);
            }
            if ($user->getGestionnaire())
            {
                return $this->json($user->getGestionnaire(), 200, [], ['groups' => 'gestionnaire:read']);
            }
        }
        return $this->json(['message' => 'Vous n\'avez pas les droits nécessaires'], Response::HTTP_FORBIDDEN);
    }

    /**
     * @Route("/api/user/infos", name="get_infos_user", methods={"GET"})
     */
    public function getUserInfos(Security $security)
    {
        $user = $security->getUser();
        if($user->getAdmin()){
            $admin = $user->getAdmin();
            return $this->json(['data'=>$admin], 200, [], ['groups' => ['admin:read']]);
        }
        if ($security->isGranted('ROLE_SUPERADMIN') || $security->isGranted('ROLE_ADMIN') || $security->isGranted('ROLE_GESTIONNAIRE')) {
            return $this->json($user, 200, [], ['groups' => ['user:read']]);
        }
        return $this->json(['message' => 'Vous n\'avez pas les droits nécessaires'], Response::HTTP_FORBIDDEN);
    }

    /**
     * @Route("/api/admin/entites", name="get_entite_admin", methods={"GET"})
     */
    public function getEntitesAdmin(Security $security)
    {
        $user = $security->getUser();
        if($user->getAdmin()){
            $admin = $user->getAdmin();
            $entites = $admin->getEntites();
            return $this->json($entites, 200,);
        }else {
            return $this->json(['message' => 'Vous n\'avez pas les droits nécessaires'], Response::HTTP_FORBIDDEN);
        }
    }

    /**
     * @Route("/api/password/request", name="password_request", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function requestPassword(Request $request,\Swift_Mailer $mailer,Security $security, EntityManagerInterface $manager)
    {
        //Générer une chaine aleatoire et la cryptée
        $random=rand();
        $tokenPassword = md5($random);
        //Récuperer l'email de l'utilisateur l'utilisateur connecté
        $data = json_decode($request->getContent());
        $user = $manager->getRepository(User::class)->findOneBy(['email'=>$data->email]);
        
        if($user){
            $user->setToken($tokenPassword)
                 ->setTokenConfirm(false)
                 ->setTokenUpdatedAt(new \DateTime());
            $manager->persist($user);
             //Lui envoyer un mail avec le lien pour changer son mot de passe
            $message = (new \Swift_Message('AFRICLEAN SUPPORT REMOTE - Changement de mot de passe'))
                        ->setFrom('fullsecu22@gmail.com')
                        ->setTo($user->getEmail())         
                        ->setBody("
                            <p> Vous avez oublié votre mot de passe? veuillez entrez ce code pour confirmer la réinitialisation de votre mot de passe ${tokenPassword} <p>");
            $message->setContentType("text/html");
            $mailer->send($message);
            $manager->flush();
            return $this->json(['message'=>'Un messsage a été envoyé pour confirmation ','Resultat'=>'SUCCESS','token'=>$tokenPassword],200);
        }else{
            return $this->json(['message'=>'Email non trouvé','Resultat'=>'FAILED'],404);
        }

    }

    /**
     * @Route("/api/password/reset/{token}", name="password_reset_post", methods={"POST"})
     * L'utilisateur fournit le token de confirmation et valide
     */
    public function enterCodeConfirmation(Request $request,$token, EntityManagerInterface $manager){

        $data = json_decode($request->getContent());
        $user = $manager->getRepository(User::class)->findOneBy(['token'=>$token]);
        if($user){
            //Voir si le token a été confirmé
            if($user->getTokenConfirm()){
                return $this->json(['message'=>'Ce code a déjà été utilisé','Resultat'=>'FAILED'],404);
            }
            //Verifier sie le token est le meme que celui envoyé par mail
            if($user->getToken() == $data->codeVerification){
                //Vérification de la validité du code pour 5 minutes
                if($user->getTokenUpdatedAt()->diff(new \DateTime())->format('%h') == 0 && $user->getTokenUpdatedAt()->diff(new \DateTime())->format('%i') >= 30){
                    return $this->json(['message'=>'Le code a expiré','Resultat'=>'FAILED'],404);
                }
                $user->setTokenConfirm(true);
                $manager->persist($user);
                $manager->flush();
                return $this->json(['message'=>'Code de confirmation validé','Resultat'=>'SUCCESS'],200);
            }else{
                return $this->json(['message'=>'Code de confirmation invalide','Resultat'=>'FAILED'],404);
            }
        }else{
            return $this->json(['message'=>'Code de confirmation invalide','Resultat'=>'FAILED'],404);
        }
    }


    /**
     * @Route("/api/password/reset/{token}", name="password_reset_put", methods={"PUT"})
     */
    public function resetPassword(Request $request,$token, EntityManagerInterface $manager,UserPasswordHasherInterface $encoder){

        $user = $manager->getRepository(User::class)->findOneBy(['token'=>$token]);
        $data = json_decode($request->getContent());
        if(!$user){
            return $this->json(['message'=>'Token invalide','Resultat'=>'ERROR'],404);
        }elseif($data->password==$data->password_confirm && $user->getTokenConfirm()){
            $user->setPassword($encoder->hashPassword($user, $data->password))
                ->setTokenConfirm(null)
                ->setToken(null);
            $manager->flush();
            return $this->json(['message'=>'Mot de passe changé','Resultat'=>'SUCCESS'],200);
        }

    }
}
