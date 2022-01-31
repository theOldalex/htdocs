<?php

namespace App\Controller\Admin;

use App\Controller\HomeController;
use App\Entity\User;
use App\Entity\RERNG;
use App\Entity\Z5600;
use App\Entity\Auteur;
use App\Entity\Article;
use App\Entity\Realisation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\EasyAdminBundle;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;




class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<img src="logo.PNG">');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToUrl('Home', 'fa fa-home', "{{ path('admin') }}");
        yield MenuItem::linkToCrud('Users', 'fa-solid fa fa-user', User::class);
        yield MenuItem::linkToCrud('Auteurs', 'fa-solid fa fa-user', Auteur::class);
        yield MenuItem::linkToCrud('Z5600', 'fa fa-train', Z5600::class);
        yield MenuItem::linkToCrud('RERNG', 'fa fa-train', RERNG::class);
        yield MenuItem::linkToCrud('Réalisations', 'fa fa-file-image', Realisation::class);
        yield MenuItem::linkToCrud('Articles', 'fa fa-newspaper', Article::class);
        
    }
}
