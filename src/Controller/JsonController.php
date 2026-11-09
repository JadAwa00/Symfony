<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class JsonController extends AbstractController
{
    #[Route('/json', name: 'app_json')]
    public function index(): JsonResponse
    {
        $data = [
            'status' => 'success',
            'status_text' => 'OK',
            'timestamp' => new \DateTime(),
            'app_name' => 'SymfonySandbox',
            'symfony_version' => '7.3',
        ];

        return $this->json($data);
    }
}
