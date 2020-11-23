<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Produit;

class ProduitFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 20; $i++){
            $produit = new Produit();
            $produit->setName("Nom du produit n°$i")
                    ->setDescription("<p>Contenu du produit n°$i </p>")
                    ->setPromo(1)
                    ->setDisplay(1)
                    ->setPriceHT(10.0)
                    ->setCreated(new \DateTime());

            $manager->persist($produit);
        }

        $manager->flush();
    }
}
