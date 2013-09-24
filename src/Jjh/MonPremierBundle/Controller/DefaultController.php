<?php

namespace Jjh\MonPremierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JjhMonPremierBundle:Default:index.html.twig');
    }
}
