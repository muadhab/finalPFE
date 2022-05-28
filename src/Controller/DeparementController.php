<?php

namespace App\Controller;

use App\Entity\Deparement;
use App\Form\DeparementType;
use App\Repository\DeparementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/deparement")
 */
class DeparementController extends AbstractController
{
    /**
     * @Route("/", name="app_deparement_index", methods={"GET"})
     */
    public function index(DeparementRepository $deparementRepository): Response
    {
        return $this->render('deparement/index.html.twig', [
            'deparements' => $deparementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_deparement_new", methods={"GET", "POST"})
     */
    public function new(Request $request, DeparementRepository $deparementRepository): Response
    {
        $deparement = new Deparement();
        $form = $this->createForm(DeparementType::class, $deparement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $deparementRepository->add($deparement, true);

            return $this->redirectToRoute('app_deparement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('deparement/new.html.twig', [
            'deparement' => $deparement,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_deparement_show", methods={"GET"})
     */
    public function show(Deparement $deparement): Response
    {
        return $this->render('deparement/show.html.twig', [
            'deparement' => $deparement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_deparement_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Deparement $deparement, DeparementRepository $deparementRepository): Response
    {
        $form = $this->createForm(DeparementType::class, $deparement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $deparementRepository->add($deparement, true);

            return $this->redirectToRoute('app_deparement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('deparement/edit.html.twig', [
            'deparement' => $deparement,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_deparement_delete", methods={"POST"})
     */
    public function delete(Request $request, Deparement $deparement, DeparementRepository $deparementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$deparement->getId(), $request->request->get('_token'))) {
            $deparementRepository->remove($deparement, true);
        }

        return $this->redirectToRoute('app_deparement_index', [], Response::HTTP_SEE_OTHER);
    }
}
