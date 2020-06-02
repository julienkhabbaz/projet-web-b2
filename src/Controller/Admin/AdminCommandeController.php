<?php

namespace App\Controller\Admin;

use App\Entity\Commande;
use App\Form\CommandeAdminType;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/commande")
 */
class AdminCommandeController extends AbstractController
{
    /**
     * @Route("/", name="commande_index", methods={"GET"})
     */
    public function index(CommandeRepository $commandeRepository): Response
    {
        return $this->render('admin/commande/index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="commande_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $commande = new Commande();
        $form = $this->createForm(CommandeAdminType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $prix =  $commande->getPlat()->getPrix();
            $qt = $commande->getQuantite();
            $total =  $qt * ($prix + 2.5);
            $commande->setTotal($total);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commande);
            $entityManager->flush();
            $this->addFlash('success', 'Enregistrer avec succès');


            return $this->redirectToRoute('commande_index');
        }

        return $this->render('admin/commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commande_show", methods={"GET"})
     */
    public function show(Commande $commande): Response
    {
        return $this->render('admin/commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="commande_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Commande $commande): Response
    {
        $form = $this->createForm(CommandeAdminType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $prix =  $commande->getPlat()->getPrix();
            $qt = $commande->getQuantite();
            $total =  $qt * ($prix + 2.5);
            $commande->setTotal($total);
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Modifier avec succès');

            return $this->redirectToRoute('commande_index');
        }

        return $this->render('admin/commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commande_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Commande $commande): Response
    {
        if ($this->isCsrfTokenValid('delete' . $commande->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($commande);
            $entityManager->flush();
            $this->addFlash('success', 'Supprimer avec succès');
        }

        return $this->redirectToRoute('commande_index');
    }
}
