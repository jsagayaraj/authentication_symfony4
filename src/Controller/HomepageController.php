<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage_index")
     */
    public function index()
    {
        return $this->render('homepage/index.html.twig',[
            'mainNavHome'=>true, 'title'=>'Accueil'
         ]);
    }
}
