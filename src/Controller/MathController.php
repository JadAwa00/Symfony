<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MathController extends AbstractController
{
    #[Route('/math/{a}/{b}', name: 'app_math', requirements: ['a' => '\d+', 'b' => '\d+'])]
    public function show(int $a, int $b): Response
    {
        $result = $a + $b;

        return $this->render('math/show.html.twig', [
            'a' => $a,
            'b' => $b,
            'result' => $result,
        ]);
    }
}
