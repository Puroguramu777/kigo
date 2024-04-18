<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    private $projetRepo;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projetRepo = $projectRepository;
        
        
    }
    
    
    #[Route("/accueil", name:"accueil", methods:['POST', 'GET'])]
    public function home(){
    

        return $this->render("home/home.html.twig",[
            "projets" => $this->projetRepo->findAllOptimize(),
            
        ]);
    }

     

    


}