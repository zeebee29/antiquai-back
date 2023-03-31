<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Menus;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class MenusFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $entree  = $this->getReference('entree_menu');
        $plat    = $this->getReference('plat_menu');
        $dessert = $this->getReference('dessert_menu');

        /*** Menu Entrée + PLat ***/
        $menu1 = new Menus();
        $menu1->setName('Menu Déjeuner (Entrée + Plat)');
        $menu1->setPrice(20.00);
        $menu1->addPlat($entree);
        $menu1->addPlat($plat);
        $manager->persist($menu1);

        /*** Menu PLat+Dessert ***/
        $menu2 = new Menus();
        $menu2->setName('Menu Déjeuner (Plat + Dessert)');
        $menu2->setPrice(20.00);
        $menu2->addPlat($plat);
        $menu2->addPlat($dessert);
        $manager->persist($menu2);

        /*** Menu PLat+Dessert ***/
        $menu3 = new Menus();
        $menu3->setName('Menu Déjeuner Complet');
        $menu3->setPrice(26.00);
        $menu3->addPlat($entree);
        $menu3->addPlat($plat);
        $menu3->addPlat($dessert);
        $manager->persist($menu3);

        $manager->flush();
    }


    public function getDependencies()
    {
        return [
            PlatsFixtures::class,
        ];
    }
}
