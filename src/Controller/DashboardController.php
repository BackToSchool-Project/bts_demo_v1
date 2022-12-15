<?php

namespace App\Controller;

use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/profil', name: 'app_dashboard')]
    public function show(Security $security): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, "Pour accéder à cette page, veuillez vous connecter");
        return $this->render('dashboard/dashboard.html.twig');
    }
}
