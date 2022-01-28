<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConfirmController extends AbstractController
{
    #[Route('/confirm', name: 'confirm')]
    public function index(UserRepository $userRepository): Response
    {
        $user = $this->getUser();

        return $this->render('confirm/index.html.twig', [
            'user' => $this->getUser(),
        ]);
    }
}
