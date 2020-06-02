<?php

namespace App\Controller\Admin;

use App\Entity\Restaurant;
use App\Repository\CommandeRepository;
use App\Repository\RestaurantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashController extends AbstractController
{
    /**
     * @Route("/admin/dash", name="admin_dash")
     */
    public function index(RestaurantRepository $restaurantRepository, CommandeRepository $commandeRepository)

    {

        $totalRestaurant = $restaurantRepository->CountRestaurant();

        $commandeEnCours = $commandeRepository->status(0);

        $commandePasse = $commandeRepository->status(1);

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminDashController',
            'totalRestaurant' => $totalRestaurant,
            'commandeEnCours' => $commandeEnCours,
            'commandePasse' => $commandePasse
        ]);
    }
}
