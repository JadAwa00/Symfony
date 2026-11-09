<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GreetController extends AbstractController
{
    #[Route('/greet/{name}/{times}', name: 'app_greet', requirements: ['times' => '\d+'])]
    public function greet(string $name, int $times = 1): Response
    {
        $greetings = [];
        for ($i = 1; $i <= $times; $i++) {
            $greetings[] = "Salut $name !";
        }

        return $this->render('greet/index.html.twig', [
            'greetings' => $greetings,
        ]);
    }
}
