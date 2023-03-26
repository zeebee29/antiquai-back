<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Plats;
use App\Repository\CategoriesRepository;

class PlatsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Récupération des références à la fixture Category
        $catAperitif    = $this->getReference('category_aperitif');
        $catEntree     = $this->getReference('category_entree');
        $catPlat        = $this->getReference('category_plat');
        $catDessert     = $this->getReference('category_dessert');
        $catAlcool      = $this->getReference('category_alcool');
        $catSsAlcool    = $this->getReference('category_ss_alcool');
        $catVin         = $this->getReference('category_vin');

        /*** PLATS ***/
        $plat1 = new Plats();
        $plat1->setName('Ravioles Maison');
        $plat1->setDescription('Ravioles farcies d’une mousseline d’artichaut et ricotta, condiment câpre, artichauts frits et jus Barigoule');
        $plat1->setPrice(20.00);
        $plat1->setInCarte(true);
        $plat1->setCategory($catPlat);
        $manager->persist($plat1);

        $plat2 = new Plats();
        $plat2->setName('Pêche "Petits Bateaux"');
        $plat2->setDescription('Poisson, endives grillées au paprika, jeunes navets au miel, orge fumé, beurre Nantais au vermouth');
        $plat2->setPrice(28.00);
        $plat2->setInCarte(true);
        $plat2->setCategory($catPlat);
        $manager->persist($plat2);

        $plat3 = new Plats();
        $plat3->setName('Lapin rôti');
        $plat3->setDescription('Lapin rôti à l’ail des ours, purée de patate douce à la moutarde, brocolis grillés aux amandes, tapenade olive-citron');
        $plat3->setPrice(28.00);
        $plat3->setInCarte(true);
        $plat3->setCategory($catPlat);
        $manager->persist($plat3);

        $plat4 = new Plats();
        $plat4->setName('Agneau');
        $plat4->setDescription('Travail autour de l’agneau de lait des Pyrénées, à partager pour deux personnes minimum');
        $plat4->setPrice(30.00);
        $plat4->setInCarte(true);
        $plat4->setCategory($catPlat);
        $manager->persist($plat4);

        /*** DESSERTS ***/
        $plat5 = new Plats();
        $plat5->setName('Baba');
        $plat5->setDescription('Baba infusé à la cardamone, textures de poire et chantilly cardamone verte');
        $plat5->setPrice(13.00);
        $plat5->setInCarte(true);
        $plat5->setCategory($catDessert);
        $manager->persist($plat5);

        $plat6 = new Plats();
        $plat6->setName('Coulant chocolat');
        $plat6->setDescription('Chocolat Hukambi « pure origine Brésil » crème Anglaise Oabika, tuile grué de cacao');
        $plat6->setPrice(14.00);
        $plat6->setInCarte(true);
        $plat6->setCategory($catDessert);
        $manager->persist($plat6);

        $plat7 = new Plats();
        $plat7->setName('Dans l’esprit d’une Pavlova');
        $plat7->setDescription('Avec grenade et estragon');
        $plat7->setPrice(12.00);
        $plat7->setInCarte(true);
        $plat7->setCategory($catDessert);
        $manager->persist($plat7);

        /*** APERITIFS ***/
        $plat8 = new Plats();
        $plat8->setName('Focaccia maison');
        $plat8->setDescription('au levain naturel, condiment anchois');
        $plat8->setPrice(4.00);
        $plat8->setInCarte(true);
        $plat8->setCategory($catAperitif);
        $manager->persist($plat8);

        $plat9 = new Plats();
        $plat9->setName('Coppa');
        $plat9->setDescription('Fines tranches de coppa di Parma IGP');
        $plat9->setPrice(4.00);
        $plat9->setInCarte(true);
        $plat9->setCategory($catAperitif);
        $manager->persist($plat9);

        $plat10 = new Plats();
        $plat10->setName('Crevettes grises');
        $plat10->setDescription('Crevettes grises croustillantes, condiment Karashi');
        $plat10->setPrice(4.00);
        $plat10->setInCarte(true);
        $plat10->setCategory($catAperitif);
        $manager->persist($plat10);

        /*** ENTREES  ***/
        $plat11 = new Plats();
        $plat11->setName('Parfait de foies de volaille');
        $plat11->setDescription('Foies de volaille, crumble de graines, salade d’herbes fraiches, condiment échalotes');
        $plat11->setPrice(15.00);
        $plat11->setInCarte(true);
        $plat11->setCategory($catEntree);
        $manager->persist($plat11);

        $plat12 = new Plats();
        $plat12->setName('Asperges vertes grillées');
        $plat12->setDescription('Asperges vertes du Gers, kumquats confites, émulsion café, Jaune d’œuf et cheddar fumés');
        $plat12->setPrice(15.00);
        $plat12->setInCarte(true);
        $plat12->setCategory($catEntree);
        $manager->persist($plat12);

        $plat13 = new Plats();
        $plat13->setName('Poissons de roche grillés');
        $plat13->setDescription('Avec pommes de terre fondantes, rouille maison, fraicheur de fenouil, découvrez notre Bouillabaisse');
        $plat13->setPrice(15.00);
        $plat13->setInCarte(true);
        $plat13->setCategory($catEntree);
        $manager->persist($plat13);

        /*** BOISSONS ALCOOLISEES ***/
        $plat14 = new Plats();
        $plat14->setName('Coupe de champagne brut rosé 12 cl');
        $plat14->setDescription('');
        $plat14->setPrice(13.00);
        $plat14->setInCarte(true);
        $plat14->setCategory($catAlcool);
        $manager->persist($plat14);

        $plat15 = new Plats();
        $plat15->setName('Whisky Malt Michel Couvreur Cuvée Overaged 4cl');
        $plat15->setDescription('');
        $plat15->setPrice(10.00);
        $plat15->setInCarte(true);
        $plat15->setCategory($catAlcool);
        $manager->persist($plat15);

        $plat16 = new Plats();
        $plat16->setName('Notre Cocktail Maison 10cl');
        $plat16->setDescription('');
        $plat16->setPrice(12.00);
        $plat16->setInCarte(true);
        $plat16->setCategory($catAlcool);
        $manager->persist($plat16);

        $plat17 = new Plats();
        $plat17->setName('Nos Bières (Brasserie Nautile) 33cl');
        $plat17->setDescription('');
        $plat17->setPrice(6.00);
        $plat17->setInCarte(true);
        $plat17->setCategory($catAlcool);
        $manager->persist($plat17);

        $plat18 = new Plats();
        $plat18->setName('Pastis Bardouin 4cl');
        $plat18->setDescription('');
        $plat18->setPrice(6.00);
        $plat18->setInCarte(true);
        $plat18->setCategory($catAlcool);
        $manager->persist($plat18);

        /*** BOISSONS SANS ALCOOL ***/
        $plat19 = new Plats();
        $plat19->setName('Cocktail de fruits Borderline 25cl');
        $plat19->setDescription('');
        $plat19->setPrice(6.00);
        $plat19->setInCarte(true);
        $plat19->setCategory($catSsAlcool);
        $manager->persist($plat19);

        $plat20 = new Plats();
        $plat20->setName('Lemonade naturel La Loere 33cl');
        $plat20->setDescription('');
        $plat20->setPrice(6.00);
        $plat20->setInCarte(true);
        $plat20->setCategory($catSsAlcool);
        $manager->persist($plat20);

        $plat21 = new Plats();
        $plat21->setName('Cola naturel La loere 33cl');
        $plat21->setDescription('');
        $plat21->setPrice(6.00);
        $plat21->setInCarte(true);
        $plat21->setCategory($catSsAlcool);
        $manager->persist($plat21);

        $plat22 = new Plats();
        $plat22->setName('Perrier 33cl');
        $plat22->setDescription('');
        $plat22->setPrice(5.00);
        $plat22->setInCarte(true);
        $plat22->setCategory($catSsAlcool);
        $manager->persist($plat22);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
