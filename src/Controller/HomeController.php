<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Announcement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{


    #[Route('/', name: 'app_home')]
    public function Index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    
    #[Route('/shop', name: 'app_shop')]
    public function shop(): Response
    {
        return $this->render('shop/shop.html.twig', [
            'controller_name' => 'ShopController',
        ]);
    }
}
