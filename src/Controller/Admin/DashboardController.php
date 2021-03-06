<?php

namespace App\Controller\Admin;

use App\Entity\Accueil;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     * @Security("is_granted('ROLE_USER')")
     */
    public function index(): Response
    {
        return $this->render('Bundles/EasyAdminBundle/welcome.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<img src="images/LogoBlack.png" style="width: 5%; padding-right: 1%;">Atelier Soboa')
            ->setFaviconPath('images/LogoT.png');

    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Accueil', 'fa fa-toolbox');
        yield MenuItem::linkToCrud('HomePage', 'fa fa-home',Accueil::class);
        yield MenuItem::linktoDashboard('Contact', 'fa fa-mail-bulk');
        yield MenuItem::linkToCrud('Utilisateurs', 'fa fa-user',User::class);
    }

    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
            ->setName($user->getName())
            ;
    }
    public function configureAssets(): Assets
    {

        return Assets::new()->addCssFile('css/admin.css');
    }
}
