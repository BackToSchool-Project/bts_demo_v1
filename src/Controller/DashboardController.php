<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/profil', name: 'app_dashboard')]
    public function show(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, "Pour accéder à cette page, veuillez vous connecter");
        return $this->render('dashboard/dashboard.html.twig');
    }
}
