<?php

namespace App\Service;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\RequestStack;

class CartService {
    private $repo;
    private $rs;

    public function __construct(ProduitRepository $repo, RequestStack $rs)
    {
        $this->repo = $repo;
        $this->rs = $rs;
    }

    public function add($id) {
        $session = $this->rs->getSession();
        $cart = $session->get('cart', []);

        if (!empty($cart[$id])) {
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }


        $session->set('cart', $cart);

        //dd($session->get('cart'));
    }

    public function delete($id) {
        $session = $this->rs->getSession();
        $cart = $session->get('cart', []);

        if (!empty($cart[$id])) {
            $cart[$id]--;
        } 
        if (empty($cart[$id])) {
            unset($cart[$id]);
        } 


        $session->set('cart', $cart);

        //dd($session->get('cart'));
    }
}