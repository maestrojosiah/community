<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Photo;
use AppBundle\Form\PhotoType;

class PhotoController extends Controller
{
    /**
     * @Route("/photo/upload", name="upload_photo")
     */
    public function uploadAction(Request $request)
    {
        $data = [];

        $em = $this->getDoctrine()->getManager();

        $photo = new Photo();

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $data['user'] = $user;

        $form = $this->createForm(PhotoType::class, $photo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $photo->getFilename();
            $fileName = date("YmdHis")."|".$user->getRandomAuth().".".$file->guessExtension();
            $photo->setSize($file->getClientSize());
            $photo->setType($file->getMimeType());

            $file->move(
                $this->getParameter('photo_directory'),
                $fileName
            );

            $photo->setUser($user);
            $photo->setFileName($fileName);


            $em->persist($photo);
            $em->flush();

            $this->addFlash(
                'success',
                'Photo uploaded!'
            );

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('user_profile', ['slug' => $user->getRandomAuth()]);
            
        }

        return $this->render('photo/create.html.twig', ['form' => $form->createView(), 'data' => $data,] );

    }

    /**
     * @Route("/photo/delete/{id}", name="delete_photo")
     */
    public function deleteAction(Request $request, $id)
    {
        $data = [];

        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $photo = $em->getRepository('AppBundle:Photo')
            ->find($id);

        $photoDirectory = $this->getParameter('photo_directory');
        $photoName = $photo->getFilename();
        $path = $photoDirectory."/".$photoName;
        unlink($path);

        $em->remove($photo);
        $em->flush();

        $this->addFlash(
            'success',
            'Photo deleted!'
        );

        // ... do any other work - like sending them an email, etc
        // maybe set a "flash" success message for the user

        return $this->redirectToRoute('user_profile', ['slug' => $user->getRandomAuth()]);

    }

    /**
     * @Route("/photo/edit/{id}", name="edit_photo")
     */
    public function editAction(Request $request, $id)
    {
        $data = [];

        $em = $this->getDoctrine()->getManager();

        $photo = $em->getRepository('AppBundle:Photo')
            ->find($id);
        $data['photo'] = $photo;

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $data['user'] = $user;

        $form = $this->createForm(PhotoType::class, $photo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $photoDirectory = $this->getParameter('photo_directory');
            $photoName = $photo->getFilename();
            $path = $photoDirectory."/".$photoName;
            unlink($path);

            $file = $photo->getFilename();
            $fileName = date("YmdHis")."|".$user->getRandomAuth().".".$file->guessExtension();
            $photo->setSize($file->getClientSize());
            $photo->setType($file->getMimeType());

            $file->move(
                $this->getParameter('photo_directory'),
                $fileName
            );
            $photo->setFileName($fileName);

            $photo->setUser($user);


            // $em->persist($photo);
            // $em->flush();

            $this->addFlash(
                'success',
                'Photo uploaded!'
            );

            return $this->redirectToRoute('user_profile', ['slug' => $user->getRandomAuth()]);
            
        } else {
            $form_data['caption'] = $photo->getCaption();
            $form_data['fileName'] = $photo->getFilename();
            $data['form'] = $form_data;
        }

        return $this->render('photo/create.html.twig', ['form' => $form->createView(), 'data' => $data,] );

    }

    /**
     * @Route("/profile/make", name="make_profile_picture")
     */
    public function pictureChangeAction(Request $request)
    {
        if($request->request->get('id')){

            $em = $this->getDoctrine()->getManager();

            $user = $this->get('security.token_storage')->getToken()->getUser();
            $id = $request->request->get('id');

            $photo = $em->getRepository('AppBundle:Photo')
                ->find($id);

            $profilePhoto = $em->getRepository('AppBundle:Photo')
                ->findBy(
                    array('user' => $user, 'profile' => true ),
                    array('id'=>'DESC')
                );

            if($profilePhoto){
                $profilePhoto[0]->setProfile(false);
                $em->persist($photo);
                $em->flush();                
            }

            $photo->setProfile(true);
            $em->persist($photo);
            $em->flush();


            $data['prof'] = $photo->getFilename();
        } 
            
        return new JsonResponse($data);

    }

}