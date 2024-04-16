<?php

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    
    
    #[Route("/accueil", name:"accueil", methods:['POST', 'GET'])]
    public function home(){
    

        return $this->render("home/home.html.twig",[
            
        ]);
    }

     

    


}