<?php

namespace ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Service\generalData;

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
    public function showAction($id)
    {   
        $em = $this->getDoctrine()->getEntityManager();
        $project = $em->getRepository('ProjectBundle:Project')->findOneById($id);
        return $this->render('ProjectBundle:Default:show.html.twig',[
            'projects' => $project
            ]);
    }
}
