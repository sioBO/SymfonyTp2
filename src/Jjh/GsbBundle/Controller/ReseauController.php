<?php

namespace Jjh\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReseauController extends Controller
{
    public function repartitionAction()
    {
        return $this->render('JjhGsbBundle:Reseau:repartition.html.twig');
    }
    public function segmentationAction()
    {
        return $this->render('JjhGsbBundle:Reseau:segmentation.html.twig');
    }
   
}
