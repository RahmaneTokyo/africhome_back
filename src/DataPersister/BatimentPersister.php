<?php

namespace App\DataPersister;

use DateTime;
use App\Entity\User;
use App\Entity\Admin;
use App\Entity\Entite;
use App\Entity\Contact;
use App\Entity\Batiment;
use App\Entity\Gestionnaire;
use App\Entity\Proprietaire;
use App\Entity\BatimentOwner;
use App\Repository\UserRepository;
use App\Repository\EntiteRepository;
use phpDocumentor\Reflection\Element;
use App\Repository\BatimentRepository;
use App\Repository\TypeEntiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


final class BatimentPersister implements ContextAwareDataPersisterInterface
{
    private $entityManager;
    private $requestStack;
    private Security $security;
    private $batRepo;
    private $userRepo;
    private $entiteRepo;
    private $typeEntiteRepo;
    private $encoder;

    public function __construct(
        EntityManagerInterface $entityManager,
        RequestStack $requestStack,
        Security $security,
        BatimentRepository $batRepo,
        UserRepository $userRepo,
        EntiteRepository $entiteRepo,
        TypeEntiteRepository $typeEntiteRepo,
        UserPasswordEncoderInterface $encoder
    )
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack->getCurrentRequest();
        $this->security = $security;
        $this->batRepo = $batRepo;
        $this->userRepo = $userRepo;
        $this->entiteRepo = $entiteRepo;
        $this->typeEntiteRepo = $typeEntiteRepo;
        $this->encoder = $encoder;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Batiment;
    }

    public function persist($data, array $context = [])
    {
        if ((($context['collection_operation_name'] ?? null) === 'post')) {
            $entite = $data->getEntite();
            if ($entite->getType() !== 'COLLECTIVITE') {
                return new Response(json_encode(['message'=>'Selectionnez une entite de type COLLECTIVITE !!!']), 403,
                ['content-type' => 'application/json']);
            }
            /*$newData=json_decode($this->requestStack->getContent());*/

            $this->entityManager->persist($data);
            $this->entityManager->flush();
            return $data;
        }

        if ((($context['item_operation_name'] ?? null) === 'put')) {
            $newData=json_decode($this->requestStack->getContent());
            $type = $newData->types;
            if ($type === 'AjoutEntite') {
                $entite = new Entite();
                // $user = new User();
                // $admin = new Admin();
                $contact = new Contact();

                // Creation Contact
                $contact->setEmail($newData->contact->email)
                        ->setTelephone($newData->contact->telephone);

                //  Creation Admin
                // if ($newData->admins) {
                //     $admin->setMatricule($newData->admins->matricule)
                //       ->setNumeroCarteProf($newData->admins->numeroCarteProf)
                //       ->setUser($user);

                //     // Creation User
                //     $user->setPrenom($newData->admins->user->prenom)
                //     ->setNom($newData->admins->user->nom)
                //     ->setEmail($newData->admins->user->email)
                //     ->setType('ADMIN')
                //     ->setDateDeNaissance(new \DateTime('now'))
                //     ->setPassword($this->encoder->encodePassword($user, $newData->admins->user->password));
                // }
                
                // Creation entite
                $typeEntite = $this->typeEntiteRepo->findOneBy(['titre' => $newData->typeEntite]);

                $entite->setNom($newData->nom)
                       ->setDescription($newData->description)
                       ->setContact($contact)
                       ->setTypeEntite($typeEntite);
                    //    ->addAdmin($admin);
                if ($newData->isEntreprise){
                    $entite->setIsEntreprise($newData->isEntreprise);
                    if ($newData->isEntreprise === true) {
                        $entite->setType('ENTREPRISE');
                    }
                }

                $batOwner = new BatimentOwner();
                $prop = new Proprietaire();
                $prop->setEntite($entite);
                $batOwner->addProprietaire($prop);
                $batOwner->setBatiment($data);
                $batOwner->setDateCreation(new \DateTime('now'));



                $this->entityManager->persist($entite, $contact, $batOwner);
                $this->entityManager->flush();

                return $data;

            }
            if ($type === 'AjoutUser') {
                $users = new User();
                $gestionnaire = new Gestionnaire();

                // Ajout User
                $users->setPrenom($newData->user->prenom)
                     ->setNom($newData->user->nom)
                     ->setEmail($newData->user->email)
                     ->setType('GESTIONNAIRE')
                     ->setPassword($this->encoder->encodePassword($users, $newData->user->password));
                    //  $date = $newData->user->dateDeNaissance;
                    //  if ($date !== '') {
                    //     $users->setDateDeNaissance($newData->user->dateDeNaissance);
                    //  }else {
                    //     $users->setDateDeNaissance(new \DateTime('now'));
                    //  }

                // Creation Gestionnaire
                $gestionnaire->setTypeGestionnaire($newData->typeGestionnaire)
                             ->setMatricule($newData->matricule)
                             ->setNumeroCarteProf($newData->numeroCarteProf)
                             ->setUser($users);

                $batOwner = new BatimentOwner();
                $prop = new Proprietaire();
                $prop->setUser($users);
                $batOwner->addProprietaire($prop);
                $batOwner->setBatiment($data);
                $batOwner->setDateCreation(new \DateTime('now'));
                
                $this->entityManager->persist($batOwner, $gestionnaire, $users);
                $this->entityManager->flush();

                return $data;

            }
            if ($type === 'AjoutExistant') {
                if ($newData->user === '' && $newData->entites === '') {
                    return new Response(json_encode(['message'=>'Selectionnez au moins un proprietaire !!!']), 403,
                    ['content-type' => 'application/json']);
                }
                if ($newData->user !== '' && $newData->entites !== '') {
                    return new Response(json_encode(['message'=>'Selectionnez seulement un proprietaire !!!']), 403,
                    ['content-type' => 'application/json']);
                }
                if ($newData->user !== '') {
                    $user = $this->userRepo->findOneBy(['id' => $newData->user]);
                    $batOwner = new BatimentOwner();
                    $prop = new Proprietaire();
                    $prop->setUser($user);
                    $batOwner->addProprietaire($prop);
                    $batOwner->setBatiment($data);
                    $batOwner->setDateCreation(new \DateTime('now'));
                    
                    $this->entityManager->persist($batOwner);
                    $this->entityManager->flush();

                    return $data;
                }
                if ($newData->entites !== '') {
                    $entites = $this->entiteRepo->findOneBy(['id' => $newData->entites]);
                    $batOwner = new BatimentOwner();
                    $prop = new Proprietaire();
                    $prop->setEntite($entites);
                    $batOwner->addProprietaire($prop);
                    $batOwner->setBatiment($data);
                    $batOwner->setDateCreation(new \DateTime('now'));

                    $this->entityManager->persist($batOwner);
                    $this->entityManager->flush();

                    return $data;
                }
            }
        }
    }

    public function remove($data, array $context = [])
    {
        $this->entityManager->remove($data);
        $this->entityManager->remove($data->getUser());
        $this->entityManager->flush();
    }
}