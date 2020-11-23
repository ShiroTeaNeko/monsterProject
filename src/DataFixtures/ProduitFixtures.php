<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Produit;

class ProduitFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();
        
        for($i = 1; $i <= 20; $i++){
            $produit = new Produit();
            $produit->setName($faker->sentence(7))
                    ->setDescription($faker->paragraph(24))
                    ->setPromo(1)
                    ->setDisplay(1)
                    ->setPriceHT(10.0)
                    ->setCreated(new \DateTime());

            $manager->persist($produit);
        }

        $manager->flush();
    }
}
