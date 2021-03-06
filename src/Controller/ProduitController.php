<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit')]
    public function index(Request $request, ProduitRepository $repo): Response
    {
        $produit = $repo->findAll();

        // dd($request);
        $input = ($request->query->get('query'));
        dump($input);

        return $this->render('produit/index.html.twig', [
            'produits' => $produit,
            'input' => $input
        ]);
    }
}
