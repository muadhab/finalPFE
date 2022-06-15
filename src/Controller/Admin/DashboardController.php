<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use App\Entity\User;
use App\Entity\Incident;
use App\Entity\Comparer;
use App\Entity\Upload;
use App\Entity\Task;
use App\Entity\OracleTester;
use App\Entity\Deparement;
// use App\Controller\Admin\OracleTesterController;
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
            -setFaviconPath('public\monitoralogo.PNG');
    }

    public function configureMenuItems(): iterable
    {
        ;
        yield MenuItem::linkToCrud('Users Management', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Incidents Management', 'fas fa-indent', Incident::class);
        yield MenuItem::linkToCrud('Tasks Management', 'fas fa-flag', Task::class);
        yield MenuItem::linkToDashboard('Backup Monitoring', 'fa fa-home');
        yield MenuItem::linkToCrud('Compare Management', 'fas fa-anchor', Comparer::class);
        yield MenuItem::linkToCrud('Upload CSV', 'fas  fa-upload', Upload::class);
        yield MenuItem::linkToCrud('Departement Managament', 'fas  fa-users', Deparement::class);
        yield MenuItem::linkToCrud('Oracle Tester', 'fas  fa-tasks', OracleTester::class);
        yield MenuItem::linkToCrud('infrasructure Monitoring', 'fas  fa-cloud', Upload::class);
        yield MenuItem::linkToCrud('Reporing Managament', 'fas  fa-file', Upload::class);
    }
}
