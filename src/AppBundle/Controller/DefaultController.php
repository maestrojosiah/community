<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Post;
use AppBundle\Form\PostType;

class DefaultController extends Controller
{
    /**
     * @Route("/home/{page}", defaults={"page" = 1}, name="homepage")
     */
    public function indexAction(Request $request, $page = 1 )
    {
        $data = [];

        $limit = 5;
        $offset = $page * $limit - $limit;

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

        $posts = $em->getRepository('AppBundle:Post')
            ->findBy(
                array('group' => null),
                array('id'=>'DESC'),
                $limit,
                $offset
            );

        if($posts){
            $data['nextPage'] = $page + 1;
        } else {
            $data['nextPage'] = "blank";
        }
        $existingProfilePic = $em->getRepository('AppBundle:Photo')
                ->findBy(
                    array('user' => $user, 'profile' => true ),
                    array('id'=>'DESC')
                );

        if($existingProfilePic){
            $data['profile_pic'] = true;
            $data['profPic'] = $existingProfilePic[0]->getFilename();
        } else {
            $data['profile_pic'] = false;
        }

        $data['posts'] = $posts;



        return $this->render('default/home.html.twig', $data);
    }


    /**
     * @Route("/test",  name="test_page")
     */
    public function testAction(Request $request )
    {
        $data = [];

        $em = $this->getDoctrine()->getManager();

        $user = $this->get('security.token_storage')->getToken()->getUser();

        $data['user'] = $user;


        return $this->render('post/test.html.twig', $data);
    }


    /**
     * @Route("/send-notification", name="send_notification")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function sendNotification(Request $request)
    {
        $manager = $this->get('mgilet.notification');
        $notif = $manager->generateNotification('Likes !');
        $notif->setMessage('Someone liked your post ....');
        $notif->setLink('http://sth.com/');
        $manager->addNotification($this->getUser(), $notif);

        // or the one-line method :
        // $manager->createNotification($this->getUser(), 'Notification subject','Some random text','http://google.fr');

        return $this->redirectToRoute('homepage');
    }    
}
