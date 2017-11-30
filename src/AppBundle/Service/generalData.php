<?php

namespace AppBundle\Service;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;



class generalData 
{

    protected $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function siteName()
    {
        $em = $this->em;

      $siteNames = $em->getRepository('SiteStyleBundle:Header')->findAll();
       foreach ($siteNames as $siteName) {
          
       }
       if($siteNames != NULL){
         return array('siteName'=>$siteName->getTitle(),'description'=>$siteName->getDescription ()); 
       }

       else{
        return array('siteName'=>'Change The Name','description'=>'From The Admin Page'); 
       }
       
    }

      public function socialMedia()
    {
        $em = $this->em;

      $socialMedias = $em->getRepository('SiteStyleBundle:SocialMedia')->findAll();
       //foreach ($socialMedias as $socialMedia) {
          
       //}
       if($socialMedias != NULL){
         return $socialMedias; 
       }

       else{
        return array('name'=>'Add Some in The Admin Page','href'=>'homapage','iconclass'=>'icon fa-facebook '); 
       }
       
    }
}
