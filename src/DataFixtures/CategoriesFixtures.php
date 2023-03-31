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
        $cat1->setNameForMenu('Apéritifs');
        $cat1->setNameForCarte('Nos apéritifs');
        $manager->persist($cat1);

        $cat2 = new Categories();
        $cat2->setName('entrées');
        $cat2->setNameForMenu('Entrée');
        $cat2->setNameForCarte('Nos entrées');
        $manager->persist($cat2);

        $cat3 = new Categories();
        $cat3->setName('plats');
        $cat3->setNameForMenu('Plat');
        $cat3->setNameForCarte('Nos plats');
        $manager->persist($cat3);

        $cat4 = new Categories();
        $cat4->setName('desserts');
        $cat4->setNameForMenu('Dessert');
        $cat4->setNameForCarte('Nos desserts');
        $manager->persist($cat4);

        $cat5 = new Categories();
        $cat5->setName('alcool');
        $cat5->setNameForMenu('Boissons');
        $cat5->setNameForCarte('Nos boissons alcoolisées');
        $manager->persist($cat5);

        $cat6 = new Categories();
        $cat6->setName('sans alcool');
        $cat6->setNameForMenu('Boisssons sans alcool');
        $cat6->setNameForCarte('Nos boisssons sans alcool');
        $manager->persist($cat6);

        $cat7 = new Categories();
        $cat7->setName('vins');
        $cat7->setNameForMenu('Vins');
        $cat7->setNameForCarte('Nos vins');
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
