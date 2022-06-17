<?php

namespace App\Controller;

use App\Repository\IncidentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IncidentController extends AbstractController
{
    #[Route('/incident', name: 'app_incident')]
    public function index(): Response
    {
        return $this->render('incident/index.html.twig', [
            'controller_name' => 'IncidentController',
        ]);
    }

    /**
     * @Route(name="getIncidents", path="/api/incidents", methods={"GET"})
     */
    public function getIncidents() {
        $user = $this->getUser();

        if ($user->getGestionnaire() === null) {
            $entites = $user->getAdmin()->getEntites();
            foreach ($entites as $incident) {
                $incidents = $incident->getIncidents();
            }
        }

        if ($user->getAdmin() === null) {
            $entites = $user->getGestionnaire()->getEntites();
            foreach ($entites as $incident) {
                $incidents[] = $incident->getIncidents();
            }

            $data = array_splice($incidents, 0, count($incidents));

        }


        return $this->json($data);
    }
}
