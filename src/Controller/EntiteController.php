<?php

namespace App\Controller;

use App\Entity\Entite;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function getEntitesOfAdmin(Security $security) {
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
}
