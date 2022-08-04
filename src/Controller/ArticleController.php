<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    /**
     * @Route(name="addArticle", path="/api/articles", methods={"POST"})
     */
    public function addArticle(Request $request, SluggerInterface $slugger, DenormalizerInterface $serializer, EntityManagerInterface $manager) {
        $userTab = $request->request->all();
        $file = $request->files->get('media');

        $activite = $serializer->denormalize($userTab, Article::class);

        if ($file) {
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $originalFilename = $file->getClientOriginalName();
            $originalExtension = $file->guessExtension();
            $safeFilename = $slugger->slug($filename);
            $newFilename = $safeFilename.'-'.uniqid().'-'.'file'.'.'.$file->guessExtension();

            try {
                $file->move($this->getParameter('dossiers_directory').'files', $newFilename);
                $activite->setMedia($originalFilename);
            } catch (FileException $e) {
                return new Response(
                    'Erreur de l\'upload du fichier',
                    Response::HTTP_INTERNAL_SERVER_ERROR
                );
            }
        }

        $manager->persist($activite);
        $manager->flush();

        return $this->json(['data' => 'success'], 200);
    }
}
