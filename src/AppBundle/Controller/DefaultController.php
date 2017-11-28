<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Service\generalData;
use Doctrine\ORM\EntityManagerInterface;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(EntityManagerInterface $em ,Request $request,generalData $generalData )
    {

     $siteName =  $generalData->siteName()['siteName'];
     $description =  $generalData->siteName()['description'];
     $projects= $em->getRepository('ProjectBundle:Project')->findAll();
        return $this->render('default/index.html.twig', [
          'siteName'=>$siteName,
          'description'=>$description,
          'projects'=>$projects
        ]);
    }
}
