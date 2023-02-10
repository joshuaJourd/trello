<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateListController extends AbstractController
{
    #[Route('/create/list', name: 'app_create_list')]
    public function index(): Response
    {
        return $this->render('create_list/index.html.twig', [
            'controller_name' => 'CreateListController',
        ]);
    }
}
