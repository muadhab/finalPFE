<?php

namespace App\Controller;

use App\Entity\AttachedFile;
use App\Form\AttachedFileType;
use App\Repository\AttachedFileRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/attached/file")
 */
class AttachedFileController extends AbstractController
{
    /**
     * @Route("/", name="app_attached_file_index", methods={"GET"})
     */
    public function index(AttachedFileRepository $attachedFileRepository): Response
    {
        return $this->render('attached_file/index.html.twig', [
            'attached_files' => $attachedFileRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_attached_file_new", methods={"GET", "POST"})
     */
    public function new(Request $request, AttachedFileRepository $attachedFileRepository): Response
    {
        $attachedFile = new AttachedFile();
        $form = $this->createForm(AttachedFileType::class, $attachedFile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $attachedFileRepository->add($attachedFile, true);

            return $this->redirectToRoute('app_attached_file_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('attached_file/new.html.twig', [
            'attached_file' => $attachedFile,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_attached_file_show", methods={"GET"})
     */
    public function show(AttachedFile $attachedFile): Response
    {
        return $this->render('attached_file/show.html.twig', [
            'attached_file' => $attachedFile,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_attached_file_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, AttachedFile $attachedFile, AttachedFileRepository $attachedFileRepository): Response
    {
        $form = $this->createForm(AttachedFileType::class, $attachedFile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $attachedFileRepository->add($attachedFile, true);

            return $this->redirectToRoute('app_attached_file_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('attached_file/edit.html.twig', [
            'attached_file' => $attachedFile,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_attached_file_delete", methods={"POST"})
     */
    public function delete(Request $request, AttachedFile $attachedFile, AttachedFileRepository $attachedFileRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$attachedFile->getId(), $request->request->get('_token'))) {
            $attachedFileRepository->remove($attachedFile, true);
        }

        return $this->redirectToRoute('app_attached_file_index', [], Response::HTTP_SEE_OTHER);
    }
}
