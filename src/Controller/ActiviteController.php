<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Repository\ActiviteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class ActiviteController extends AbstractController
{
    #[Route('/activite', name: 'app_activite')]
    public function index(): Response
    {
        return $this->render('activite/index.html.twig', [
            'controller_name' => 'ActiviteController',
        ]);
    }

    /**
     * @Route(name="addActivite", path="/api/activites", methods={"POST"})
     */
    public function addActivite(Request $request, SluggerInterface $slugger, DenormalizerInterface $serializer, EntityManagerInterface $manager) {
        $userTab = $request->request->all();
        $file = $request->files->get('media');

        if ($file) {
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $originalFilename = $file->getClientOriginalName();
            $originalExtension = $file->guessExtension();
            $safeFilename = $slugger->slug($filename);
            $newFilename = $safeFilename.'-'.uniqid().'-'.'file'.'.'.$file->guessExtension();

            try {
                $file->move($this->getParameter('dossiers_directory').'files', $newFilename);
            } catch (FileException $e) {
                return new Response(
                    'Erreur de l\'upload du fichier',
                    Response::HTTP_INTERNAL_SERVER_ERROR
                );
            }
        }

        $activite = $serializer->denormalize($userTab, Activite::class);
        $activite->setMedia($originalFilename);

        $manager->persist($activite);
        $manager->flush();


        return $this->json([
            'data' => 'success',
        ], 200);
    }

    /**
     * @Route(name="getActivite", path="/api/activites/{id}", methods={"GET"})
     */
    public function getActivites(ActiviteRepository $activiteRepository, $id) {
        $activite = $activiteRepository->findOneBy(['id' => $id]);

    }
}
