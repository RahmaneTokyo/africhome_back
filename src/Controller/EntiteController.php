<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Entite;
use App\Repository\EntiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class EntiteController extends AbstractController
{
    #[Route('/entite', name: 'app_entite')]
    public function index(): Response
    {
        return $this->render('entite/index.html.twig', [
            'controller_name' => 'EntiteController',
        ]);
    }

    /**
     * @Route("/api/entite/{id}/block", name="block_entite", methods={"PUT"})
     */
    public function blockEntite($id, EntityManagerInterface $manager) {
        $entite = $manager->getRepository(Entite::class)->findOneBy(['id' => $id]);
        if (!$entite) {
            return $this->json('Cette entite n\'existe pas');
        }else {
            if ($entite->getIsBloked() === true) {
                return $this->json('Cette entité est déjà desactivée', 403);
            }else {
                $entite->SetIsBloked(true);
                $manager->persist($entite);
                $manager->flush();

                return $this->json('Entite desactivée', 200);
            }
        }
    }

    /**
     * @Route("/api/entite/{id}/unblock", name="unblock_entite", methods={"PUT"})
     */
    public function unblockEntite($id, EntityManagerInterface $manager) {
        $entite = $manager->getRepository(Entite::class)->findOneBy(['id' => $id]);
        if (!$entite) {
            return $this->json('Cette entite n\'existe pas');
        }else {
            if ($entite->getIsBloked() === false) {
                return $this->json('Cette entité n\'est pas desactivée', 403);
            }else {
                $entite->SetIsBloked(false);
                $manager->persist($entite);
                $manager->flush();

                return $this->json('Entite activée', 200);
            }
        }
    }

    /**
     * @Route("/api/admin/entites", name="getEntitesOfAdmin", methods={"GET"})
     */
    public function getEntitesOfAdmin(Security $security, EntiteRepository $entiteRepository) {
        $user = $security->getUser();
        if ($user->getAdmin()) {
            $entite = $user->getAdmin()->getEntites();
            return $this->json($entite, 200, [], ['groups' => ['adminEntite:read']]);
        }else {
            return $this->json([
                'message'=>'Accès non autorisé',          
                'status'=>'FAILED'], 401);
        }
    }

    /**
     * @Route("/api/gestionnaire/entites", name="getEntitesOfGestionnaire", methods={"GET"})
     */
    public function getEntitesOfGestionnaire(Security $security, EntiteRepository $entiteRepository) {
        $gestionnaire = $this->getUser()->getGestionnaire();

        foreach ($gestionnaire->getEntites() as $entites) {
            $entite[] = $entites;
        }

        return $this->json($entite, 200, [], ["groups" => ["entiteSon"]]);
    }

    /**
     * @Route("/api/admin/entite/son", name="getEntiteSon", methods={"GET"})
     */
    public function getEntiteSon( EntiteRepository $entiteRepository) {
        $admin = $this->getUser()->getAdmin();

        foreach ($admin->getEntites() as $entites) {
            $fiw[] = $entiteRepository->findBy(['father' => $entites->getId()]);
        }
        $son = array_merge(...$fiw);

        return $this->json($son, 200, [], ["groups" => ["entiteSon"]]);
    }

    /**
     * @Route("/api/admin/entite/father/type", name="getEntiteatherByType", methods={"GET"})
     */
    public function getEntiteFatherByType(Security $security) {
        $user = $security->getUser();
        if ($user->getAdmin()) {
            $entite = $user->getAdmin()->getEntites();
            $entreprise = [];
            $collectivite = [];

            foreach ($entite as $admin) {
                if ($admin->getType() === 'ENTREPRISE') {
                    $entreprise[] = $admin;
                }
                if ($admin->getType() === 'COLLECTIVITE') {
                    $collectivite[] = $admin;
                }
            }

            $data = [
                'entreprise' => $entreprise,
                'collectivite' => $collectivite
            ];

            return $this->json($data, 200, [], ['groups' => ['adminEntite:read']]);
        }else {
            return $this->json([
                'message'=>'Accès non autorisé',
                'status'=>'FAILED'], 401);
        }
    }

    /**
     * @Route("/api/entite/{id}/localisation", name="addLocalisationEntite", methods={"PUT"})
     */
    public function addLocalisationEntite(RequestStack $requestStack, $id, EntityManagerInterface $manager, EntiteRepository $entiteRepository) {
        $newData=json_decode($requestStack->getCurrentRequest()->getContent());

        $entite = $entiteRepository->findOneBy(['id' => $id]);

        $contacts = $entite->getContact();

        $contacts->setLatitude($newData->lat)
            ->setLongitude($newData->lng)
            ->setVille($newData->ville);

        $manager->persist($entite);
        $manager->flush();

        return $this->json($entite, 201);
    }

}
