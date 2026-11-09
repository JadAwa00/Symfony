<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DatetimeController extends AbstractController
{
    #[Route('/datetime', name: 'app_datetime')]
    public function index(): Response
    {
        $date = new \DateTime();

        return $this->render('datetime/index.html.twig', [
            'date' => $date,
        ]);
    }
}
