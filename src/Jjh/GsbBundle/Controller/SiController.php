<?php

namespace Jjh\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiController extends Controller
{
    public function descriptionAction()
    {
        return $this->render('JjhGsbBundle:Si:description.html.twig');
    }
     public function gestionAction()
    {
        return $this->render('JjhGsbBundle:Si:gestion.html.twig');
    }
     public function equipementAction()
    {
        return $this->render('JjhGsbBundle:Si:equipement.html.twig');
    }
}
