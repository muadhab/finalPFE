<?php

namespace App\Controller;

use App\Entity\Upload;
use App\Form\UploadType;
use App\Repository\UploadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/upload")
 */
class UploadController extends AbstractController
{
    /**
     * @Route("/", name="app_upload_index", methods={"GET"})
     */
    public function index(UploadRepository $uploadRepository): Response
    {
        return $this->render('upload/index.html.twig', [
            'uploads' => $uploadRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_upload_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UploadRepository $uploadRepository): Response
    {
        $upload = new Upload();
        $form = $this->createForm(UploadType::class, $upload);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadRepository->add($upload, true);

            return $this->redirectToRoute('app_upload_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('upload/new.html.twig', [
            'upload' => $upload,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_upload_show", methods={"GET"})
     */
    public function show(Upload $upload): Response
    {
        return $this->render('upload/show.html.twig', [
            'upload' => $upload,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_upload_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Upload $upload, UploadRepository $uploadRepository): Response
    {
        $form = $this->createForm(UploadType::class, $upload);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadRepository->add($upload, true);

            return $this->redirectToRoute('app_upload_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('upload/edit.html.twig', [
            'upload' => $upload,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_upload_delete", methods={"POST"})
     */
    public function delete(Request $request, Upload $upload, UploadRepository $uploadRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$upload->getId(), $request->request->get('_token'))) {
            $uploadRepository->remove($upload, true);
        }

        return $this->redirectToRoute('app_upload_index', [], Response::HTTP_SEE_OTHER);
    }
}
