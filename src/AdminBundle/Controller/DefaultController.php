<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function indexAction()
    {
        return $this->render('Default/index.html.twig',
                             [
                               'firstname' => 'Patrice',
                               'lastname' => 'Boun'
                             ]);
    }
}
