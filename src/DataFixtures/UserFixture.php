<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $faker = \Faker\Factory::create('fr_FR');

        for($i = 1 ; $i <= mt_rand(8, 10); $i++) {
            $user = new User;

            $user->setUsername($faker->lastName)
                ->setEmail($faker->email)
                ->setPassword($faker->firstName);
            $manager->persist($user);
        }


        $manager->flush();
    }
}
