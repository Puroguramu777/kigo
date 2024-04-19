<?php

namespace App\Controller;


use App\Entity\User;
use App\Repository\SectionRepository;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProfilController extends AbstractController
{
    private $sectionRepo;

    public function __construct(SectionRepository $sectionRepository)
    {
        $this->sectionRepo = $sectionRepository;
        
        
    }
    
    
    
    #[Route("/{id}", name:"profil", methods:['GET'])]
    public function home(User $user, int $id): Response{
    

        return $this->render("user/profil.html.twig",[
            'user'=> $user,
            'section'=>$this->sectionRepo->findUserSection($id)
            
            
        ]);
    }

     

    


}