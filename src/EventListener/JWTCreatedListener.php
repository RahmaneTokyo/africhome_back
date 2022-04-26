<?php

namespace App\EventListener;

use App\Entity\Agent;
use App\Repository\UserRepository;
use App\Repository\EmployesRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTCreatedEvent;

class JWTCreatedListener{

    private $repoUser;

    public function __construct(RequestStack $requestack,UserRepository $repoUser )
    {
        $this->repoUser = $repoUser;
    }

    /**
     * @param JWTCreatedEvent $event
     *
     * @return void
     */
    public function onJWTCreated(JWTCreatedEvent $event)
    {
        $payload = $event->getData();
        $user = $this->repoUser->findOneBy(['email'=>$payload['username']]);
        $payload['type']=$user->getType();
        $payload['isBlocked'] = false;
        if (in_array('ROLE_SUPERADMIN',$payload['roles']) || (in_array('ROLE_ANONYMOUS',$payload['roles']) && count($payload['roles'])==1)) {
            $payload['isBlocked']=$user->getIsBloked();
        }else
        {
          if (preg_match('/^ADMIN/', $payload['type'])) {
            $payload['isBlocked']=$user->getAdmin()->getEntite()->getIsBloked();
          }elseif ($preg_match('/^GESTIONNAIRE/', $payload['type'])) {
            $payload['isBlocked']=$user->getGestionnaire()->getEntite()->getIsBloked();
          }
            // $entiteBlocked = ($user->getAdmin()) ->getEntite()->getIsBloked();
            // $payload['isBlocked']= $entiteBlocked ? true : $user->getIsBloked();
        }
        $event->setData($payload);     
        $header = $event->getHeader();
        $event->setHeader($header);
    }
}