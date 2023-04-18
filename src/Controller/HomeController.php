<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ArticlesRepository $articleRepo): Response
    {
        $article = $articleRepo->findAll(); 
        return $this->render('home/index.html.twig', [
            'article' => $article,
        ]);
    }
}
