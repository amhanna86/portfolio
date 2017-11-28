<?php

namespace ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ProjectBundle:Default:index.html.twig');
    }

     /**
     * @Route("show/{id}", name="project_show", requirements={"id": "\d+"})
     */
    public function showAction()
    {
        return $this->render('ProjectBundle:Default:show.html.twig');
    }
}
