<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Produit;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(Request $request, ProduitRepository $repo, UserRepository $userRepo): Response
    {
        $temp = new Produit;

        $produit = $repo->findAll();
        $allUser = $userRepo->findAll();

        $idInput = ($request->query->get('id'));
        if ($idInput > count($produit)) {
            dump("article inconnu");
        } else {



            $temp = $repo->find(id: $idInput);
            $userId = $temp->getUserId()->getId();


            $userName =  "";
            for ($i = 0; $i < count($allUser); $i++) {
                if ($allUser[$i]->getId() == $userId) {
                    $userName = $allUser[$i]->getUsername();
                }
            }



            return $this->render('article/index.html.twig', [
                'produits' => $produit,
                'idInput' => $idInput,
                'userName' => $userName

            ]);
        }
        return $this->render('article/index.html.twig', [
            'produits' => $produit,
            'idInput' => $idInput,
        ]);
    }
}
