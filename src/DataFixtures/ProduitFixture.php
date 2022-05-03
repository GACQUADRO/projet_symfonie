<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Persistence\ObjectManager;

class ProduitFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

               // $produit = new Produit();
        // $manager->persist($produit);

        $faker = \Faker\Factory::create('fr_FR');

        $user = new User;
        for($i = 1 ; $i <= mt_rand(8, 10); $i++) {

            $user->setUsername($faker->lastName)
                ->setEmail($faker->email)
                ->setPassword($faker->firstName);
            $manager->persist($user);
        }

        for($i = 1 ; $i <= mt_rand(8, 10); $i++) {
            $produit = new Produit;

            $produit->setNom($faker->sentence(3))
                ->setImage($faker->imageUrl)
                ->setDescription($faker->sentence(5))
                ->setPrix($faker->randomFloat(2,10,100))
                ->setUserId($user);
            $manager->persist($produit);
        }
        
        $manager->flush();
    }
}
