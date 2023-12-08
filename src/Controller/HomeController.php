<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Service\ArticleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private const RECENT_ARTICLE_COUNT_ON_HOME = 5; //константа
    #[Route('/', name: 'homepage')]
    public function index(ArticleService $articleService): Response
    {
        return $this->render('Home/index.html.twig', [
            'articles' => $articleService->getRecentArticles(self::RECENT_ARTICLE_COUNT_ON_HOME),
            //'controller_name' => 'HomeController',
        ]);
    }
}
