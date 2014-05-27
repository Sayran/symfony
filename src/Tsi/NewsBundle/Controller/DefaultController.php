<?php

namespace Tsi\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('NewsBundle:News')->findByIsActive(true);
        return $this->render('NewsBundle:Default:index.html.twig', array('news'=> $news));
    }

    public  function addAction()
    {
        return $this->render('NewsBundle:Default:add.html.twig');
    }

    public function editAction()
    {
        return $this->render('NewsBundle:Default:edit.html.twig');
    }

    public  function deleteAction()
    {
           return ;
    }
}
