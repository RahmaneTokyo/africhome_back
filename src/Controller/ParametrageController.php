<?php

namespace App\Controller;

use App\Entity\ParamTypesAgents;
use App\Entity\ParamTypesDemandes;
use App\Entity\TypeIncident;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ParametrageController extends AbstractController
{

    private $manager;
    private $security;

    public function __construct(
            EntityManagerInterface $manager,
            Security $security
            )
    {
        $this->manager = $manager;
        $this->security = $security;
    }

    /**
     * @Route("api/param_types_agents", name="add_type_agent", methods={"POST"})
     */
    public function addTypeAgent(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $user = $this->security->getUser();
        if($user->getAdmin()){

            $entite = $user->getAdmin()->getEntite() ?? $user->getGestionnaire()->getEntite();
            $typeAgent = new ParamTypesAgents();
            $typeAgent->setTitre($data['titre']);
            $typeAgent->setDescription($data['description']);
            $typeAgent->setEntite($entite);
            $this->manager->persist($typeAgent);
            $this->manager->flush();

            return $this->json([
                'message' => 'Type d\'agent ajouté avec succès',
                'status' => 'SUCCESS',
                'data' => $typeAgent
            ], 200);
        }
        return $this->json([
            'message'=>'Veuillez revoir vos données',
            'status'=>'FAILED'], 401);
    }

    /**
     * @Route("api/type_incidents", name="add_type_incident", methods={"POST"})
     */
    public function addTypeIncident(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $user = $this->security->getUser();
        if($user->getAdmin()){

            $entite = $user->getAdmin()->getEntites() ?? $user->getGestionnaire()->getEntites();
            $typeIncident = new TypeIncident();
            $typeIncident->setTitre($data['titre'])
                         ->setDescription($data['description']);

            $this->manager->persist($typeIncident);
            $this->manager->flush();

            return $this->json([
                'message' => 'Type d\'agent ajouté avec succès',
                'status' => 'SUCCESS',
                'data' => $typeIncident
            ], 200);
        }
        return $this->json([
            'message'=>'Veuillez revoir vos données',
            'status'=>'FAILED'], 401);
    }


    // /**
    //  * @Route("api/param_types_agents/{id}", name="edit_type_agent", methods={"PUT"})
    //  */
    // public function editTypeAgent($id,Request $request)
    // {
    //     $typeAgent = $this->manager->getRepository(ParamTypesAgents::class)->find($id);
    //     return $this->json([
    //         'message' => 'Type d\'agent modifié avec succès',
    //         'status' => 'SUCCESS',
    //         'data' => $typeAgent
    //     ], 200);
    // }

    /**
     * @Route("api/param_types_agents", name="get_types_agents", methods={"GET"})
     */
    public function getTypesAgents()
    {
        $user = $this->security->getUser();
        if($user->getAdmin()){
            $entite = $user->getAdmin()->getEntite() ?? $user->getGestionnaire()->getEntite();
            $typesAgents = $entite->getParamTypesAgents();
            return $this->json($typesAgents, 200);
        }
        return $this->json([
            'message' => 'Vous n\'avez pas les droits pour accéder à cette ressource',
            'status' => 'FAILED',
        ], 403);
    }


    /**
    * @Route("api/param_types_demandes", name="add_type_demande", methods={"POST"})
    */
    public function addTypeDemande(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $user = $this->security->getUser();
        if($user->getAdmin()){

            $entite = $user->getAdmin()->getEntite() ?? $user->getGestionnaire()->getEntite();
            $typeDemande = new ParamTypesDemandes();
            $typeDemande->setTitre($data['titre']);
            $typeDemande->setDescription($data['description']);
            $typeDemande->setType($data['type']);
            $typeDemande->setEntite($entite);
            $this->manager->persist($typeDemande);
            $this->manager->flush();

            return $this->json([
                'message' => 'Type de demande ajouté avec succès',
                'status' => 'SUCCESS',
                'data' => $typeDemande
            ], 200);
        }
        return $this->json([
            'message'=>'Veuillez revoir vos données',
            'status'=>'FAILED'], 401);
    }
}
