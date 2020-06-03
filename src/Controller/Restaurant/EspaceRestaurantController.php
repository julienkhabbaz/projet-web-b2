<?php

namespace App\Controller\Restaurant;

use App\Entity\Plat;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Restaurant;
use App\Form\PlatRestaurantType;
use App\Form\PlatType;
use App\Form\RestaurantType;
use App\Repository\PlatRepository;
use App\Repository\RestaurantRepository;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;

/**
 * @Route("/espace_restaurant")
 */
class EspaceRestaurantController extends AbstractController
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
     * @Route("/dash", name="espace_restaurant")
     */
    public function index()
    {
        return $this->render('espace_restaurant/index.html.twig', [
            'controller_name' => 'EspaceRestaurantController',
        ]);
    }

    /**
     * @Route("/restaurants", name="mes_restaurants", methods={"GET"})
     */
    public function listeRestaurants(RestaurantRepository $restaurantRepository, UserInterface $user): Response
    {

        return $this->render('espace_restaurant/restaurant/restaurants.html.twig', [
            'restaurants' => $restaurantRepository->findByExampleField($user),
        ]);
    }
    /**
     * @Route("/plats", name="mes_plats_restaurants", methods={"GET"})
     */

    public function listePlats(UserInterface $user, PlatRepository $platRepository): Response
    {

        return $this->render('espace_restaurant/plats/plats.html.twig', [
            'plats' => $platRepository->findPlatsByUser($user),
        ]);
    }

    /**
     * @Route("/restaurant_new", name="restaurants_new", methods={"GET","POST"})
     */
    public function newRestaurant(Request $request, UserInterface $user): Response
    {
        $restaurant = new Restaurant();
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $restaurant->setUser($user);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($restaurant);
            $entityManager->flush();

            return $this->redirectToRoute('mes_restaurants');
        }

        return $this->render('espace_restaurant/restaurant/new.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="restaurants_edit", methods={"GET","POST"})
     */
    public function editRestaurant(Request $request, Restaurant $restaurant, CacheManager $cacheManager, UploaderHelper $helper): Response
    {
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($restaurant->getImageFile() instanceof UploadedFile) {

                $cacheManager->remove($helper->asset($restaurant, 'imageFile'));
            }
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Modifier avec succès');

            return $this->redirectToRoute('mes_restaurants');
        }

        return $this->render('espace_restaurant/restaurant/editRestaurant.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form->createView(),
        ]);
    }




    /**
     * @Route("/restaurant/{id}", name="restaurants_delete", methods={"DELETE"})
     */
    public function deleteRestaurant(Request $request, Restaurant $restaurant): Response
    {
        if ($this->isCsrfTokenValid('delete' . $restaurant->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($restaurant);
            $entityManager->flush();
            $this->addFlash('success', 'Supprimer avec succès');
        }

        return $this->redirectToRoute('mes_restaurants');
    }
    /**
     * @Route("/plat_new", name="plats_new", methods={"GET","POST"})
     */
    public function newPLat(Request $request, UserProviderInterface $user): Response
    {
        $user = $this->getUser()->getId();

        $plat = new Plat();
        $form = $this->createForm(
            PlatRestaurantType::class,
            $plat,
            ['user' => $user]

        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($plat);
            $entityManager->flush();

            return $this->redirectToRoute('mes_plats_restaurants');
        }

        return $this->render('espace_restaurant/plats/new_plat.html.twig', [
            'plat' => $plat,
            'form' => $form->createView(),

        ]);
    }

    /**
     * @Route("/{id}", name="plats_edit", methods={"GET","POST"})
     */
    public function editPlat(Request $request, Plat $plat, CacheManager $cacheManager, UploaderHelper $helper): Response
    {
        $user = $this->security->getUser();

        $form = $this->createForm(
            PlatRestaurantType::class,
            $plat,
            ['user' => $user]

        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($plat->getImageFile() instanceof UploadedFile) {

                $cacheManager->remove($helper->asset($plat, 'imageFile'));
            }
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Modifier avec succès');

            return $this->redirectToRoute('mes_plats_restaurants');
        }

        return $this->render('admin/plat/edit.html.twig', [
            'plat' => $plat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="plats_delete", methods={"DELETE"})
     */
    public function deletePlat(Request $request, Plat $plat): Response
    {
        if ($this->isCsrfTokenValid('delete' . $plat->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($plat);
            $entityManager->flush();
            $this->addFlash('success', 'Supprimer avec succès');
        }

        return $this->redirectToRoute('plat_index');
    }
}
