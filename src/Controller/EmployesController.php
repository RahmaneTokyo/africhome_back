<?php

namespace App\Controller;

use App\Enums\TypeAdminEnum;
use App\Repository\UserRepository;
use App\Enums\TypeGestionnaireEnum;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmployesController extends AbstractController
{

    private $security;
    private $repoUser;
    private $manager;

    const GESTIONNAIRE_TYPE = [TypeGestionnaireEnum::DIRIGEANT,TypeGestionnaireEnum::EMPLOYE, TypeGestionnaireEnum::INVITE, TypeGestionnaireEnum::AUTRE];

    public function __construct(
        Security $security,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager
        )
    {
        $this->security = $security;
        $this->repoUser = $userRepository;
        $this->manager = $entityManager;
    }


    /**
     * @Route("/api/employes", name="get_list_employes", methods={"GET"})
     */
    public function getListEmployes()
    {
        $user = $this->security->getUser();
        if ($user->getAdmin()) {
            $entite = $user->getAdmin()->getEntites();
            return $this->json($entite, 200, [], ['groups' => ['employes:read']]);
        }
//        if($user->getAdmin() || $user->getGestionnaire()){
//            $entite = $user->getAdmin()->getEntites() ?? $user->getGestionnaire()->getEntites();
//            dd($entite->getGestionnaires());
//            $admins = $entite->getAdmins();
//            $gestionnaires = $entite->getGestionnaires();
//            $employes = [...$admins, ...$gestionnaires];
//            return $this->json($employes, 200, [], ['groups' => ['gestionnaire:read', 'admin:read']]);
//        }
//        return $this->json([
//            'message' => 'Vous n\'avez pas les droits pour accéder à cette ressource',
//            'status' => 'FAILED',
//        ], 403);
    }


    /**
     * @Route("/api/employes/{id}/edit/{gestionnaire}", name="edit_employe", methods={"PUT"})
     */
    public function putEmploye($id,$gestionnaire,Request $request)
    {
        $newData=json_decode($request->getContent());
        $user_update = $newData->user_update;
        $user = $this->repoUser->findOneById($id);

        $user->setPrenom($user_update->prenom)
                ->setNom($user_update->nom)
                ->setEmail($user_update->email)
                ->setDateDeNaissance(new \DateTime($user_update->dateDeNaissance));
        
        $user->getContact()->setTelephone($user_update->contact->telephone)
          ->setBoitePostale($user_update->contact->boitePostale);

        $user->getContact()->getVille()->setNomVille($user_update->contact->ville->nomVille)
          ->setNomPays($user_update->contact->ville->nomPays);

          $employe = $user->getGestionnaire() ?? $user->getAdmin();
          $employe->setMatricule($newData->matricule)
                  ->setNumeroCarteProf($newData->numeroCarteProf);
        $employe->setUser($user);
        $this->manager->persist($employe);
        $this->manager->persist($user);
        $this->manager->flush();

        return $this->json($employe, 200, [], ['groups' => ['gestionnaire:read', 'admin:read']]);
        }

}
