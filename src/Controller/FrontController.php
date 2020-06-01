<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Contact;
use App\Entity\Plat;
use App\Entity\Restaurant;
use App\Form\CommandeType;
use App\Notification\ContactNotification;
use App\Repository\RestaurantRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Security;

class FrontController extends AbstractController
{

    /**
     * @var Security
     */
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }
    /**
     * @Route("/", name="home")
     */
    public function index(RestaurantRepository $repository)
    {

        $restaurants = $repository->findLatest();
        return $this->render('front/index.html.twig', [
            'restaurants' => $restaurants
        ]);
    }

    /**
     * @Route("/restaurants", name="liste_restaurants")
     */
    public function ListRestaurant(RestaurantRepository $repository)
    {
        $restaurants = $repository->findAll();
        return $this->render('front/restaurants.html.twig', [
            'restaurants' => $restaurants
        ]);
    }
    /**
     * @Route("restaurant/{id}", name="detail_restaurant", methods={"GET"})
     */
    public function show(Restaurant $restaurant): Response
    {
        return $this->render('front/show.html.twig', [
            'restaurant' => $restaurant,
        ]);
    }




    /**
     * @Route("/commande/new/{id}", name="commander", methods={"GET","POST"})
     */
    public function Commander(Request $request, Plat $plat, ContactNotification $notification): Response
    {


        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        $user = $this->security->getUser();
        if ($form->isSubmitted() && $form->isValid()) {




            $prix = $plat->getPrix();
            $qt = $commande->getQuantite();
            $total =  $qt * ($prix + 2.5);



            $commande->setRefCommande("REF_" . rand());
            $commande->setStatus(0);
            $commande->setTotal($total);
            $commande->setPlat($plat);
            $commande->setClient($user);
            $commande->setDateCommande(new \DateTime('now'));
            $commande->setHeureLivraison(new \DateTime('now'));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commande);
            $entityManager->flush();
            $this->addFlash('success', 'Votre commande a bien été effectué');


            $contact = new Contact();
            $contact->setCommande($commande);

            $contact->setUser($user);
            $notification->notify($contact);



            return $this->redirectToRoute('liste_restaurants');
        }

        return $this->render('front/commande.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
            'plat' => $plat
        ]);
    }
}
