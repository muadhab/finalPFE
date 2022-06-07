<?php

namespace App\Controller;

use App\Entity\OracleTester;
use App\Form\OracleTesterType;
use App\Repository\OracleTesterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/oracle/tester")
 */
class OracleTesterController extends AbstractController
{
    /**
     * @Route("/", name="app_oracle_tester_index", methods={"GET"})
     */
    public function index(OracleTesterRepository $oracleTesterRepository): Response
    {
        return $this->render('oracle_tester/index.html.twig', [
            'oracle_testers' => $oracleTesterRepository->findAll(),
        ]);
    }


    // /**
    //  * @Route("/x", name="app_oracle_tester_index", methods={"GET"})
    //  */
    // public function index2(OracleTesterRepository $oracleTesterRepository): Response
    // {
    //     return $this->render('oracle_tester/x.html', [
    //         'oracle_testers' => $oracleTesterRepository->findAll(),
    //     ]);
    // }
    

    /**
     * @Route("/new", name="app_oracle_tester_new", methods={"GET", "POST"})
     */
    public function new(Request $request, OracleTesterRepository $oracleTesterRepository): Response
    {
        $oracleTester = new OracleTester();
        $form = $this->createForm(OracleTesterType::class, $oracleTester);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $oracleTesterRepository->add($oracleTester, true);

            return $this->redirectToRoute('app_oracle_tester_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('oracle_tester/new.html.twig', [
            'oracle_tester' => $oracleTester,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_oracle_tester_show", methods={"GET"})
     */
    public function show(OracleTester $oracleTester): Response
    {
        return $this->render('oracle_tester/show.html.twig', [
            'oracle_tester' => $oracleTester,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_oracle_tester_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, OracleTester $oracleTester, OracleTesterRepository $oracleTesterRepository): Response
    {
        $form = $this->createForm(OracleTesterType::class, $oracleTester);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $oracleTesterRepository->add($oracleTester, true);

            return $this->redirectToRoute('app_oracle_tester_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('oracle_tester/edit.html.twig', [
            'oracle_tester' => $oracleTester,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_oracle_tester_delete", methods={"POST"})
     */
    public function delete(Request $request, OracleTester $oracleTester, OracleTesterRepository $oracleTesterRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$oracleTester->getId(), $request->request->get('_token'))) {
            $oracleTesterRepository->remove($oracleTester, true);
        }

        return $this->redirectToRoute('app_oracle_tester_index', [], Response::HTTP_SEE_OTHER);
    }
}
