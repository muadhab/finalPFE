<?php

namespace App\Controller;

use App\Entity\Comparer;
use App\Form\ComparerType;
use App\Repository\ComparerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/comparer")
 */
class ComparerController extends AbstractController
{
    /**
     * @Route("/", name="app_comparer_index", methods={"GET"})
     */
    public function index(ComparerRepository $comparerRepository): Response
    {
        return $this->render('comparer/index.html.twig', [
            'comparers' => $comparerRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_comparer_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ComparerRepository $comparerRepository): Response
    {
        $comparer = new Comparer();
        $form = $this->createForm(ComparerType::class, $comparer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comparerRepository->add($comparer, true);

            return $this->redirectToRoute('app_comparer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('comparer/new.html.twig', [
            'comparer' => $comparer,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_comparer_show", methods={"GET"})
     */
    public function show(Comparer $comparer): Response
    {
        return $this->render('comparer/show.html.twig', [
            'comparer' => $comparer,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_comparer_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Comparer $comparer, ComparerRepository $comparerRepository): Response
    {
        $form = $this->createForm(ComparerType::class, $comparer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comparerRepository->add($comparer, true);

            return $this->redirectToRoute('app_comparer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('comparer/edit.html.twig', [
            'comparer' => $comparer,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_comparer_delete", methods={"POST"})
     */
    public function delete(Request $request, Comparer $comparer, ComparerRepository $comparerRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$comparer->getId(), $request->request->get('_token'))) {
            $comparerRepository->remove($comparer, true);
        }

        return $this->redirectToRoute('app_comparer_index', [], Response::HTTP_SEE_OTHER);
    }
}
