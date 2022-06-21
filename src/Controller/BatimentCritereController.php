<?php

namespace App\Controller;

use App\Repository\BatimentCritereRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BatimentCritereController extends AbstractController
{
    #[Route('/batiment/critere', name: 'app_batiment_critere')]
    public function index(): Response
    {
        return $this->render('batiment_critere/index.html.twig', [
            'controller_name' => 'BatimentCritereController',
        ]);
    }

    /**
     * @Route("/api/batiment_criteres/block/{id}", name="putBatimentCritere", methods={"PUT"})
     */
    public function putBatimentCritere($id, BatimentCritereRepository $batimentCritereRepository, EntityManagerInterface $manager, RequestStack $requestStack) {
        $newData=json_decode($requestStack->getCurrentRequest()->getContent());

        $batimentCrit = $batimentCritereRepository->findOneBy(['id' => $id]);
        $batimentCrit->setActive($newData->active)
                     ->setDateModif(new \DateTime('now'));

        $manager->persist($batimentCrit);
        $manager->flush();

        return $this->json($batimentCrit, 200);
    }
}
