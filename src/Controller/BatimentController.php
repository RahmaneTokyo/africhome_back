<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\EntiteRepository;
use App\Repository\BatimentRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ProprietaireRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BatimentController extends AbstractController
{
    #[Route('/batiment', name: 'app_batiment')]
    public function index(): Response
    {
        return $this->render('batiment/index.html.twig', [
            'controller_name' => 'BatimentController',
        ]);
    }

    /**
     * @Route(name="getBatiment", path="/api/gestionnaire/batiments", methods={"GET"})
     */
    public function getBatiment(EntiteRepository $entiteRepository) {
        $gestionnaire = $this->getUser()->getGestionnaire();
        $entite = $gestionnaire->getEntites();

        foreach ($entite as $value) {
            foreach ($value->getBatiments() as $values) {
                $fiws[] = $values;
            }
        }

//        $son = array_merge($fiws);

        return $this->json($fiws, 200, [], ["groups" => ["BatimentGest"]]);
    }

    /**
     * @Route(name="getBatimentOwnerUser", path="/api/batiments/{id}/owner/user", methods={"GET"})
     */
    public function getBatimentOwnerUser(BatimentRepository $batimentRepository, $id) {
        $gestionnaire = $this->getUser()->getGestionnaire();
        if ($gestionnaire && $id) {
            $batiment = $batimentRepository->findOneBy(['id' => $id]);
            $own = $batiment->getBatimentOwners();

            foreach ($own as $prop) {
                foreach ($prop->getProprietaires() as $propo) {
                    $fiw[] = $propo;
                }
            }

            foreach($fiw as $value) {
                if ($value->getUser() !== null) {
                    $users[] = $value;
                }
            }
            
            return $this->json($users, 200, [], ["groups" => ["UserOwner"]]);

        }else {
            return $this->json([
                'message'=>'Accès non autorisé ou batiment manquant',
                'status'=>'FAILED'], 401);
        }
    }

    /**
     * @Route(name="getBatimentOwnerEntite", path="/api/batiments/{id}/owner/entite", methods={"GET"})
     */
    public function getBatimentOwnerEntite(BatimentRepository $batimentRepository, $id) {
        $gestionnaire = $this->getUser()->getGestionnaire();
        if ($gestionnaire && $id) {
            $batiment = $batimentRepository->findOneBy(['id' => $id]);
            $own = $batiment->getBatimentOwners();

            foreach ($own as $prop) {
                foreach ($prop->getProprietaires() as $propo) {
                    $fiw[] = $propo;
                }
            }

            foreach($fiw as $value) {
                if ($value->getEntite() !== null) {
                    $entites[] = $value;
                }
            }
            
            return $this->json($entites, 200, [], ["groups" => ["EntiteOwner"]]);

        }else {
            return $this->json([
                'message'=>'Accès non autorisé ou batiment manquant',
                'status'=>'FAILED'], 401);
        }
    }

     /**
     * @Route(name="blockPropUser", path="/api/batiments/owner/block/{id}", methods={"PUT"})
     */
    public function blockPropUser($id, ProprietaireRepository $proprietaireRepo, EntityManagerInterface $manager) {
        $prop = $proprietaireRepo->findOneBy(['id' => $id]);
        $batOwn = $prop->getBatimentOwner();

        $batOwn->setActive(false);
        
        $manager->persist($batOwn);
        $manager->flush();

        return $this->json($prop, 200, [], ["groups" => ["UserOwner"]]);
    }

     /**
     * @Route(name="unblockPropUser", path="/api/batiments/owner/unblock/{id}", methods={"PUT"})
     */
    public function unblockPropUser($id, ProprietaireRepository $proprietaireRepo, EntityManagerInterface $manager) {
        $prop = $proprietaireRepo->findOneBy(['id' => $id]);
        $batOwn = $prop->getBatimentOwner();

        $batOwn->setActive(true);
        
        $manager->persist($batOwn);
        $manager->flush();

        return $this->json($prop, 200, [], ["groups" => ["UserOwner"]]);
    }

    /**
     * @Route(name="addLocalisation", path="/api/batiments/{id}/localisation", methods={"PUT"})
     */
    public function addLocalisation(BatimentRepository $batimentRepository, $id, RequestStack $requestStack, EntityManagerInterface $manager) {
        $newData=json_decode($requestStack->getCurrentRequest()->getContent());

        $batiment = $batimentRepository->findOneBy(['id' => $id]);

        $contacts = $batiment->getContact();

        if ($contacts === null) {
            $contact = new Contact();
            $contact->setLatitude($newData->lat)
                ->setLongitude($newData->lng)
                ->setEmail($newData->email)
                ->setTelephone($newData->telephone)
                ->setVille($newData->ville);

            $batiment->setContact($contact);
        }else {
            $contacts->setLatitude($newData->lat)
                ->setLongitude($newData->lng)
                ->setEmail($newData->email)
                ->setTelephone($newData->telephone)
                ->setVille($newData->ville);
        }

        $manager->persist($batiment);
        $manager->flush();

        return $this->json($batiment, 201);
    }
}
