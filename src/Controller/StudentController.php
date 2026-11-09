<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]
    public function index(): Response
    {
        $student = [
            'name' => 'Dupont',
            'firstname' => 'Jean',
            'class' => 'BTS SIO SLAM2',
            'average' => 14.5,
        ];

        return $this->render('student/index.html.twig', [
            'student' => $student,
        ]);
    }
}
