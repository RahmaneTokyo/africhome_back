<?php

namespace App\Controller;

use App\Repository\TaxeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaxeController extends AbstractController
{
    #[Route('/taxe', name: 'app_taxe')]
    public function index(): Response
    {
        return $this->render('taxe/index.html.twig', [
            'controller_name' => 'TaxeController',
        ]);
    }

    /**
     * @Route("/api/taxes/block/{id}", name="putTaxe", methods={"PUT"})
     */
    public function putTaxe($id, TaxeRepository $taxeRepository, EntityManagerInterface $manager, RequestStack $requestStack) {
        $newData=json_decode($requestStack->getCurrentRequest()->getContent());

        $taxe = $taxeRepository->findOneBy(['id' => $id]);
        $taxe->setActive($newData->active)
            ->setDateModif(new \DateTime('now'));

        $manager->persist($taxe);
        $manager->flush();

        return $this->json($taxe, 200);
    }
}
