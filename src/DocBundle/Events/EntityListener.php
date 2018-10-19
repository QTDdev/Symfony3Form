<?php
/**
 * Created by PhpStorm.
 * User: formation
 * Date: 19/10/18
 * Time: 14:33
 */

namespace DocBundle\Events;


use DocBundle\Entity\Author;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class EntityListener
{
    public function bandeauMaintenance(FilterResponseEvent $event){

        $response = $event->getResponse();
        $content = $response->getContent();
        $content = $content . " Site en maintenance";
        $event->setResponse($response->setContent($content));
        $event->setResponse($response->setStatusCode(303));
        return $event;
    }


    public function update(Entity $entity){
        dump('ca marche');
        exit();


    }


}