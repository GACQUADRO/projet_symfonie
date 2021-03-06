<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Categorie;
use App\Form\AjoutArticleType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Loader\Configurator\security;

class AjoutArticleController extends AbstractController
{
    #[Route('/ajout/article', name: 'app_ajout_article')]
    public function index(Request $request, EntityManagerInterface $entityManager, CategorieRepository $repo): Response
    {

        $produit = new Produit();
        $form = $this->createForm(AjoutArticleType::class, $produit);
        $form->handleRequest($request);

        
        $user = $this->getUser();
        // $this->get('security.token_storage')->getToken()->getUser();
        $produit->setUserId($user);


        if ($form->isSubmitted() && $form->isValid()) {

            // $categ = $_POST['categ'];

            

            // $produit->setCategorieId($categ);

            $entityManager->persist($produit);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('app_produit');
        }



        $categorie = $repo->findAll();

        return $this->render('ajout_article/index.html.twig', [
            'form_article' => $form->createView(),
            'categories' => $form->createView()
        ]);
    }
}
