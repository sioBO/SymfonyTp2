<?php

namespace Jjh\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JjhGsbBundle:Default:index.html.twig');
    }
    public function activiteAction()
    {
        return $this->render('JjhGsbBundle:Default:activite.html.twig');
    }
}
