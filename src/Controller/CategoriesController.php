<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController
{
    #[Route('/categories', name: 'app_categories')]
    public function allCategories(CategoriesRepository $categoriesRepository): JsonResponse
    {
        $cat = $categoriesRepository->findAllCategories();
        $json = json_encode($cat, JSON_UNESCAPED_UNICODE);
        $response = new JsonResponse($json, 200, [], JSON_UNESCAPED_UNICODE);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}
