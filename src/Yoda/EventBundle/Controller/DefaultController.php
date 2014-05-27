<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name, $count)
    {
        //$em = $this->container->get('doctrine')->getManager();
        $em = $this->getDoctrine()->getManager();
        $templating = $this->container->get('templating');
        $repo = $em->getRepository('EventBundle:Event');

        $event = $repo->findOneBy(array(
            'name' => 'Darth\'s surprise birthday party',

        ));

        return  $this->render(
            'EventBundle:Default:index.html.twig',
            array('name' => $name,'count' => $count, 'event' => $event)
        );


//        $data = array(
//            'count' => $count,
//            'name' => $name,
//            'ackbar' => 'it\'s a traaaaaaap'
//        );
//        $json = json_encode($data);
//        $response = new Response($json);
//        $response->headers->set('Content-Type', 'application/json');
//
//        return $response;
    }
}
