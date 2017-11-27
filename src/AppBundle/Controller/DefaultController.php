<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Service\generalData;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request,generalData $generalData )
    {

     $siteName =  $generalData->siteName()['siteName'] ;
     $description =  $generalData->siteName()['description'] ;
     
        return $this->render('default/index.html.twig', [
          'siteName'=>$siteName,
          'description'=>$description
        ]);


    }


}
