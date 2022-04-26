<?php

namespace App\DataPersister;


use App\Entity\Entite;
use App\Entity\TypeEntite;
use App\Enums\TypeEntiteEnum;
use App\Repository\VilleRepository;
use App\Repository\TypeEntiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;


final class EntitePersister implements ContextAwareDataPersisterInterface
{
    private $entityManager;
    private $requestStack;
    private $villeRepository;

    const ENTITES_TYPE = [TypeEntiteEnum::DEPARTEMENT, TypeEntiteEnum::ORGANISME, TypeEntiteEnum::ENTREPRISE, TypeEntiteEnum::AUTRE];

    public function __construct(EntityManagerInterface $entityManager,VilleRepository $villeRepository,RequestStack $requestStack)
    {
        $this->entityManager = $entityManager;
        $this->villeRepository = $villeRepository;
        $this->requestStack = $requestStack->getCurrentRequest();
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Entite;
    }

    public function persist($data, array $context = [])
    {
        $newData=json_decode($this->requestStack->getContent());
        // dd($newData,$data);

        if (isset($newData->type)) {
            if (in_array($newData->type, self::ENTITES_TYPE)) {
                $data->setType(self::ENTITES_TYPE[$newData->type-1]);
            }else{
                return new Response(json_encode(['message'=>'Le type selectionné n\'existe pas  !!!']), 403,
            ['content-type' => 'application/json']);
            }
        }
     
       if ((($context['collection_operation_name'] ?? null) === 'post') || (($context['item_operation_name'] ?? null) === 'put'))
       {
           if(($context['collection_operation_name'] ?? null) === 'post'){
                $data->setArchived(false);
           }    
           if (isset($newData->idVille)) {
                   $ville =  $this->villeRepository->findOneById($newData->idVille);
                   if($ville != null) $data->getContact()->setVille($ville);
               }elseif (isset($newData->nomPays,$newData->nomVille)) {
                   $exist=$this->villeRepository->findOneByNomPays($newData->nomPays);
                   if($exist != null && $newData->nomVille === $exist->getNomVille()) $data->getContact()->setVille($exist);
               }

       }elseif (($context['item_operation_name'] ?? null) === 'archived')
       {
           $data->setArchived(true);
       }
       
        $this->entityManager->persist($data);
        $this->entityManager->flush();

       
    }

    public function remove($data, array $context = [])
    {
        $this->entityManager->remove($data);
        $this->entityManager->remove($data->getContact() ?? null);
        $this->entityManager->flush();
    }
}