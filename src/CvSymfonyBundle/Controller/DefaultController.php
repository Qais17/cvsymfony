<?php

namespace CvSymfonyBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/home" , name="home")
     */
    public function homeAction()
    {
        
        return $this->render('CvSymfonyBundle:Default:home.html.twig');
    }
    
    /**
     * @Route("/competence" , name="competence")
     */
    public function competenceAction()
    {
        return $this->render('CvSymfonyBundle:Default:Competence.html.twig');
    }
    /**
     * @Route("/loisir" , name="loisir")
     */
    public function loisirAction()
    {
        return $this->render('CvSymfonyBundle:Default:loisir.html.twig');
    }
    /**
     * @Route("/experience" , name="experience")
     */
    public function experienceAction()
    {
        return $this->render('CvSymfonyBundle:Default:expercience.html.twig');
    }
    /**
     * @Route("/diplome" , name="diplome")
     */
    public function diplomeAction()
    {
        return $this->render('CvSymfonyBundle:Default:diplome.html.twig');
    }
}
