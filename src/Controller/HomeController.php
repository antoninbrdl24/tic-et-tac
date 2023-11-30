<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SquirellRepository;
class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SquirellRepository $squirellRepository): Response
    {   
        $squirells = $squirellRepository->findAll();
        return $this->render('home/index.html.twig',['squirells'=>$squirells]);
    }
}
