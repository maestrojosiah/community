<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\ArticleL;
use AppBundle\Form\ArticleLType;

class ArticleLController extends Controller
{
    /**
     * @Route("/post/add/like", name="add_like")
     */
    public function likeAction(Request $request)
    {
        if($request->request->get('id')){
            $data = [];
            $id = $request->request->get('id');
            $user = $this->get('security.token_storage')->getToken()->getUser();
    	
	    	$em = $this->getDoctrine()->getManager();

			$post = $em->getRepository('AppBundle:Post')
				->find($id);

		    if (!$post) {
		        throw $this->createNotFoundException(
		            'No post found for that title'
		        );
		    }
		    $postId = $post->getId();

		    $existingLike = $em->getRepository('AppBundle:ArticleL')
		    	->findBy(
		    		array('post' => $post, 'user' => $user),
		    		array('id' => 'DESC'),
		    		1
		    	  );

			if($user->getGender() == "male"){
				$reference = "he";
			} else {
				$reference = "she";
			}

		    if($existingLike){
		    	$em->remove($existingLike[0]);
		    	$em->flush();
		    	$prevClass = "primary";
		    	$class = "default";
		    } else {

				$like = new ArticleL();
				$like->setUser($user);
				$like->setPost($post);

				$em->persist($like);
				$em->flush();
				$prevClass = "default";
				$class = "primary";

	        	$snipp = substr($post->getTitle(), 0, 30);
	      		$notifLink = $this->generateUrl('show_post', array('id' => $postId ));

			    if($user != $post->getUser()){
			        $manager = $this->get('mgilet.notification');
			        $notif = $manager->generateNotification('Inspired!');
			        $notif->setMessage($user->getFirstName() . ' was inspired by your post:"'. $snipp .'"...');
			        $notif->setLink($notifLink);
			        $manager->addNotification($post->getUser(), $notif);
			    }
			}


			$likes = $em->getRepository('AppBundle:ArticleL')
				->countLikes($post);
			
			$data['likes'] = $likes;
			$data['class'] = $class;
			$data['prevClass'] = $prevClass;

            return new JsonResponse($data);
       	}

    }

}