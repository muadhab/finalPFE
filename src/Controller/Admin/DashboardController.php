<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use App\Entity\User;
use App\Entity\Incident;
use App\Entity\Comparer;
use App\Entity\Upload;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;


class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
        // return $this->redirect($routeBuilder->setController(UserCrudConroller::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Monitora');
            -setFaviconPath('public\monitoa logo.PNG');
    }

    public function configureMenuItems(): iterable
    {
        // yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Users management', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Incidents management', 'fas fa-indent', Incident::class);
        yield MenuItem::linkToCrud('Compare management', 'fas fa-anchor', Comparer::class);
        yield MenuItem::linkToCrud('Upload', 'fas  fa-upload', Upload::class);
    }
}
