<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileModifType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProfileModifController extends AbstractController
{
    #[Route('/modif_profile', name: 'profile_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(ProfileModifType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $pictureFile = $form->get('picture')->getData();
            if ($pictureFile instanceof UploadedFile) {
                // Générer un nom de fichier unique pour éviter les collisions
                $newFilename = uniqid().'.'.$pictureFile->guessExtension();
            
                // Déplacer le fichier dans le répertoire où vous souhaitez stocker les images
                try {
                    $pictureFile->move(
                        $this->getParameter('public_img_profil_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Gérer l'exception si le déplacement du fichier a échoué
                }
            
                // Mettre à jour la propriété picture de l'entité User avec le nouveau nom de fichier
                $user->setPicture($newFilename);
                
            }
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Profil mis à jour avec succès !');
            // Rediriger vers une autre page après la modification du profil
            return $this->redirectToRoute('app_profile');
        }

        return $this->render('modif_profile.html.twig', [
            'profileModif' => $form->createView(),
        ]);
    }


}
