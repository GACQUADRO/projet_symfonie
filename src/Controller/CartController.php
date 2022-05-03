<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'app_cart')]
    public function index(RequestStack $rs, ProduitRepository $repo): Response
    {
        $session = $rs->getSession();
        $cart = $session->get('cart', []);
        $qt = 0;
        

        $cartWithData = [];

        foreach ($cart as $id => $quantity) {
            $cartWithData[] = [
                'produit' => $repo->find($id),
                'quantity' => $quantity
            ];
            $qt += $quantity;
        }

        $session->set('qt', $qt);
        $total = 0;

        foreach ($cartWithData as $item) {
            $totalItem = $item['produit']->getPrix() * $item['quantity'];
            $total += $totalItem;
        }


        return $this->render('cart/index.html.twig', [
            'items' => $cartWithData,
            'total' => $total
        ]);
    }

    #[Route('/cart/add/{id}', name: 'cart_add')]
    public function add($id, CartService $cs)
    {

        $cs->add($id);
        return $this->redirectToRoute('app_cart');
    }

    #[Route('/cart/add/{id}', name: 'cart_add')]
    public function addOne($id, CartService $cs)
    {

        $cs->add($id);
        return $this->redirectToRoute('app_cart');
    }

    #[Route('/cart/remove/{id}', name: 'cart_remove')]
    public function remove($id, RequestStack $rs)
    {

        $session = $rs->getSession();
        $cart = $session->get('cart', []);

        if (!empty($cart[$id])) {
            unset($cart[$id]);
        }

        $session->set('cart', $cart);
        return $this->redirectToRoute('app_cart');
    }
}
