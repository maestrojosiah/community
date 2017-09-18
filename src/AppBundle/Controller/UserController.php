<?php 

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;

class UserController extends Controller
{
    /**
     * @Route("/user/profile/{slug}", name="user_profile")
     */
	public function profileAction(Request $request, $slug)
	{
        $data = [];

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppBundle:User')
            ->findByRandomAuth($slug);

        $photos = $em->getRepository('AppBundle:Photo')
            ->findBy(
                array('user' => $user),
                array('id'=>'DESC'),
                10
            );

        $profilePhoto = $em->getRepository('AppBundle:Photo')
            ->findBy(
                array('user' => $user, 'profile' => true ),
                array('id'=>'DESC')
            );


        $data['user'] = $user[0];
        if($photos){
            $data['photos'] = $photos;
        }
        if($profilePhoto){
            $data['profilePhoto'] = $profilePhoto[0];
        }
        

        return $this->render('user/profile.html.twig', $data);

	}

}