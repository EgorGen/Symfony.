<?php

namespace App\Service;

use App\Repository\ArticleRepository;

class ArticleService
{

    public function __construct(private readonly ArticleRepository $articleRepository)
    {

    }

    public function getRecentArticles(int $count)
    {
        //здесь может быть кеш, математика и т.д.
        return $this->articleRepository->getRecentArticles($count);
    }
}