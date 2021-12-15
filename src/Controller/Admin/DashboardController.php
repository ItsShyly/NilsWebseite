<?php

namespace App\Controller\Admin;

use App\Entity\LebenslaufEintrag;
use App\Entity\Text;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
                        ->setTitle('NelsWebseite');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Lebenslauf Eintrag', 'fas fa-list', LebenslaufEintrag::class);
        yield MenuItem::linkToCrud('text', 'fas fa-list', Text::class);
    }
}
