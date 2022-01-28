<?php

namespace App\Controller;

use App\Entity\ItemCollection;
use App\Entity\User;
use App\Repository\ItemCollectionRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function index( ItemCollectionRepository $collectionRepository, EntityManagerInterface $entityManager): Response
    {
        $collections = $collectionRepository->findAll1();

        return $this->render('home_page/index.html.twig', [ 'collections' => $collections, //'username' => $username

        ]);
    }
}
