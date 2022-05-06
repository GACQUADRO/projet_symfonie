<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BuybyeController extends AbstractController
{
    #[Route('/buybye', name: 'app_buybye')]
    public function index(): Response
    {
        return $this->render('buybye/index.html.twig', [
            'controller_name' => 'BuybyeController',
        ]);
    }
}
