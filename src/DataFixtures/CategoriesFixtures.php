<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Categories;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $cat1 = new Categories();
        $cat1->setName('apéritif');
        $manager->persist($cat1);

        $cat2 = new Categories();
        $cat2->setName('entrées');
        $manager->persist($cat2);

        $cat3 = new Categories();
        $cat3->setName('plats');
        $manager->persist($cat3);

        $cat4 = new Categories();
        $cat4->setName('desserts');
        $manager->persist($cat4);

        $cat5 = new Categories();
        $cat5->setName('alcool');
        $manager->persist($cat5);

        $cat6 = new Categories();
        $cat6->setName('sans alcool');
        $manager->persist($cat6);

        $cat7 = new Categories();
        $cat7->setName('vins');
        $manager->persist($cat7);

        $this->setReference('category_aperitif', $cat1);
        $this->setReference('category_entree', $cat2);
        $this->setReference('category_plat', $cat3);
        $this->setReference('category_dessert', $cat4);
        $this->setReference('category_alcool', $cat5);
        $this->setReference('category_ss_alcool', $cat6);
        $this->setReference('category_vin', $cat7);

        $manager->flush();
    }
}
