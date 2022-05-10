<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(Request $request, ProduitRepository $repo): Response
    {
        $produit = $repo->findAll();

        // dd($request);
        $idInput = ($request->query->get('id'));
        dump($idInput);

        return $this->render('article/index.html.twig', [
            'produits' => $produit,
            'idInput' => $idInput
        ]);
    }
}
