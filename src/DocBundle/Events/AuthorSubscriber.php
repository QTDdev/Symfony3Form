<?php
/**
 * Created by PhpStorm.
 * User: formation
 * Date: 19/10/18
 * Time: 16:27
 */

namespace DocBundle\Events;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class AuthorSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            'kernel.response' => 'bandeauMaintenance'
        );
    }


    public function bandeauMaintenance(FilterResponseEvent $event){

        $response = $event->getResponse();
        $content = $response->getContent();
        $content = $content . " Site en maintenance par subscriber";
        $event->setResponse($response->setContent($content));
        $event->setResponse($response->setStatusCode(308));
        return $event;
    }




}