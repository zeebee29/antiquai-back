<?php

namespace App\Controller;

use App\Repository\PlatsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PlatsController extends AbstractController
{
    #[Route('/cartes', name: 'app_plats')]
    public function listAllPlats(PlatsRepository $platsRepo): JsonResponse
    {
        $plats = $platsRepo->findPlatsForCarte();
        $json = json_encode($plats, JSON_UNESCAPED_UNICODE);
        $response = new JsonResponse($json, 200, [], JSON_UNESCAPED_UNICODE);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}
