<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Post;
use AppBundle\Form\PostType;

class PostController extends Controller
{
    /**
     * @Route("/post/create", name="create_post")
     */
    public function createAction(Request $request, $page = 1 )
    {
        $data = [];

        $em = $this->getDoctrine()->getManager();

        $user = $this->get('security.token_storage')->getToken()->getUser();

            $data['user'] = $user;

            $post = new Post();

            $post->setUser($user);

            $today = date("d-m-Y h:i:s");
            $post->setCreated(new \DateTime($today));

            $form = $this->createForm(PostType::class, $post);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $em->persist($post);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Thank you for sharing!'
                );

                // ... do any other work - like sending them an email, etc
                // maybe set a "flash" success message for the user

                return $this->redirectToRoute('homepage');
                
            }

            $data['form'] = $form->createView();


        return $this->render('post/create.html.twig', $data);
    }

	/**
	 *@Route("/post/view/{id}/{title}", defaults={"title" = ""}, name="show_post")
	 */
	public function showPostAction(Request $request, $id, $title = null )
	{
		$data = [];
        $em = $this->getDoctrine()->getManager();

        $user = $this->get('security.token_storage')->getToken()->getUser();
        if($user != 'anon.'){
            $data['user'] = $user;

            $post = new Post();

            $post->setUser($user);

            $today = date("d-m-Y h:i:s");
            $post->setCreated(new \DateTime($today));

            $form = $this->createForm(PostType::class, $post);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $em->persist($post);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Thank you for sharing!'
                );

                // ... do any other work - like sending them an email, etc
                // maybe set a "flash" success message for the user

                return $this->redirectToRoute('homepage');
                
            }

            $data['form'] = $form->createView();

        } else {

            $data['user'] = ['firstName'=>'Login', 'action'=>'register'];
        
        }
		$post = $this->getDoctrine()->getManager()
			->getRepository('AppBundle:Post')
			->find($id);

        $existingLike = $em->getRepository('AppBundle:ArticleL')
                ->findBy(
                    array('post' => $post, 'user' => $user),
                    array('id' => 'DESC'),
                    1
                  );

        $existingProfilePic = $em->getRepository('AppBundle:Photo')
                ->findBy(
                    array('user' => $user, 'profile' => true ),
                    array('id'=>'DESC')
                );

	    if (!$post) {
	        throw $this->createNotFoundException(
	            'No post found for that title'
	        );
	    }

        if($existingLike){
            $data['liked'] = true;
        } else {
            $data['liked'] = false;
        }
            
        if($existingProfilePic){
            $data['profile_pic'] = true;
            $data['profPic'] = $existingProfilePic[0]->getFilename();
        } else {
            $data['profile_pic'] = false;
        }
            
        $likes = $em->getRepository('AppBundle:ArticleL')
            ->countLikes($post);

        $data['likes'] = $likes;
		$data['post'] = $post;

        return $this->render('post/post.html.twig', $data);
	}

	/**
	 *@Route("/post/delete/{id}", name="delete_post")
	 */
	public function deletePostAction(Request $request, $id )
	{
    	$em = $this->getDoctrine()->getManager();

		$post = $em->getRepository('AppBundle:Post')
			->find($id);

        $comments = $post->getComments();

        foreach($comments as $comment){
            $replies = $comment->getReplies();
            foreach($replies as $reply){
                $em->remove($reply);
                $em->flush();
            }
            $em->remove($comment);
            $em->flush();
        }
		
		$em->remove($post);
		$em->flush();	

        return $this->redirectToRoute('homepage');
  
	}

	/**
	 *@Route("/post/edit/{id}", name="edit_post")
	 */
	public function editPostAction(Request $request, $id )
	{
		$data = [];

    	$em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $data['user'] = $user;

		$post = $em->getRepository('AppBundle:Post')
			->find($id);
		
	    if (!$post) {
	        throw $this->createNotFoundException(
	            'No post found for that title'
	        );
	    }
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($post);
            $em->flush();

            $this->addFlash(
                'success',
                'Thank you for sharing!'
            );

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('show_post', ['id' => $id]);
            
        } else {
        	$form_data['title'] = $post->getTitle();
        	$form_data['body'] = $post->getBody();
        }

        $data['form_data'] = $form_data;
        $data['form'] = $form->createView();

		$data['post'] = $post;

        return $this->render('post/edit.html.twig', $data);
	}

}