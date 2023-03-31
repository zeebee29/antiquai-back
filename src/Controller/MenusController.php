<?php

namespace App\Controller;

use App\Repository\MenusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenusController extends AbstractController
{
    #[Route('/menus', name: 'app_menus')]
    public function listAllMenus(MenusRepository $platsRepo): JsonResponse
    {
        $plats = $platsRepo->findPlatsByMenus();
        $json = json_encode($plats, JSON_UNESCAPED_UNICODE);
        $response = new JsonResponse($json, 200, [], JSON_UNESCAPED_UNICODE);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}
