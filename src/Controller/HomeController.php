<?php

namespace App\Controller;

use App\Repository\ProjetRepository;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    private $projetRepo;

    public function __construct(ProjetRepository $projetRepository)
    {
        $this->projetRepo = $projetRepository;
        
        
    }
    
    
    #[Route("/accueil", name:"accueil", methods:['POST', 'GET'])]
    public function home(){
    

        return $this->render("home/home.html.twig",[
            "projets" => $this->projetRepo->findAllOptimize(),
            
        ]);
    }

     

    


}