<?php 

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;


class GeneralData
{
    public function getSiteName()
    {

    $em = $this->getDoctrine()->getManager();
 
       $siteName = $em->getRepository('SiteStyle:Header')->findAll();
       dump($siteName);
       die();
        return $siteName;
    }
}