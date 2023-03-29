<?php

namespace App\Controller\Admin;

use App\Entity\Categories;
use App\Entity\Menus;
use App\Entity\Plats;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    public function __construct(
        private AdminUrlGenerator $adminUrlGenerator
    ) {
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator
            ->setController(CategoriesCrudController::class)
            ->generateUrl();

        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Administration - Le Quai Antique');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Plats');
        yield MenuItem::subMenu('Actions', 'fas fa_bars')->setSubItems([
            MenuItem::linkToCrud('Ajout Plat', 'fas fa-plus', Plats::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Modifier Plat', 'fas fa-eye', Plats::class)

        ]);

        yield MenuItem::section('Menus');
        yield MenuItem::subMenu('Actions', 'fas fa_bars')->setSubItems([
            MenuItem::linkToCrud('Ajout Menu', 'fas fa-plus', Menus::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Modifier Menu', 'fas fa-eye', Menus::class)

        ]);
        yield MenuItem::section('Catégories');
        yield MenuItem::subMenu('Actions', 'fas fa_bars')->setSubItems([
            MenuItem::linkToCrud('Création Catégorie', 'fas fa-plus', Categories::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Modifier Catégorie', 'fas fa-eye', Categories::class)

        ]);


        //            linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
