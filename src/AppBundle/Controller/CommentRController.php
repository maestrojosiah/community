<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\CommentR;
use AppBundle\Form\CommentRType;

class CommentRController extends Controller
{
    /**
     * @Route("/comment/reply/create", name="create_comment_reply")
     */
    public function replyAction(Request $request)
    {
        $data = [];

        $em = $this->getDoctrine()->getManager();

        $commentReplyText = $request->request->get('commentReply');
        $replyId = $request->request->get('id');

        $user = $this->get('security.token_storage')->getToken()->getUser();

        $comment = $em->getRepository('AppBundle:Comment')
            ->find($replyId);

        $commentId = $comment->getId();

        $post = $comment->getPost();
            
        $commentReply = new CommentR();
        $commentReply->setBody($commentReplyText);
        $commentReply->setUser($user);
        $commentReply->setComment($comment);

        $snipp = substr($comment->getBody(), 0, 30);
        $snippPost = substr($post->getTitle(), 0, 30);

        $today = date("d-m-Y h:i:s");
        $formatedDate = new \DateTime($today);
        $commentReply->setCreated(new \DateTime($today));
        $formatedDate = $formatedDate->format('F jS, Y'); // for example

        $em->persist($commentReply);
        $em->flush();

        $replyId = $commentReply->getId();
        $notifLink = $this->generateUrl('show_comment', array('id' => $commentId )) . "#reply$replyId";

        // Notify owner of comment if owner is not the one commenting
        if($user != $comment->getUser()){
            $manager = $this->get('mgilet.notification');
            $notifComment = $manager->generateNotification('New reply!');
            $notifComment->setMessage($user->getFirstName().' replied to your comment: "'. $snipp . '"...');
            $notifComment->setLink($notifLink);
            $manager->addNotification($comment->getUser(), $notifComment);
        }
    
        // Notify owner of post if owner is not the one commenting and owner of post is not owner of comment
        if($post->getUser() != $user && $post->getUser() != $comment->getUser()){
            $manager = $this->get('mgilet.notification');
            $notifPost = $manager->generateNotification('New reply!');
            $notifPost->setMessage($user->getFirstName().' replied to a comment on your post: "'. $snippPost . '"...');
            $notifPost->setLink($notifLink);
            $manager->addNotification($post->getUser(), $notifPost);
        }
        
        // notify others who commented on the post
        $repliesForThisComment = $comment->getReplies();
        $usersWhoReplied = [];

        // add to the array all users who commented to this post
        foreach($repliesForThisComment as $singleReply){
            $usersWhoReplied[] = $singleReply->getUser();
        }
        // remove duplicates from array in case someone commented more than once
        $allUsersWhoReplied = array_unique($usersWhoReplied, SORT_REGULAR);
        // send them notifications
        foreach($allUsersWhoReplied as $singleUser){
            // if the user in the array is not the one commenting and is not owner of post
            if($singleUser != $user && $singleUser != $post->getUser()){
                $manager = $this->get('mgilet.notification');
                $notif = $manager->generateNotification('Follow up');
                $notif->setMessage($user->getFirstName().' also replied to this comment: '. $snipp . '...');
                $notif->setLink($notifLink);
                $manager->addNotification($singleUser, $notif);
            }
        }

        $data['commentReply'] = '
                            <div class="commentText">
                                <p id="replyBody_'.$replyId.'" class="">'.$commentReplyText.'</p> 
                                <button type="button" style="display:none;" id="updateReply_'.$replyId.'" class="btn btn-default">Done</button>
                                <span class="date sub-text">
                                    You, on ' .$formatedDate. '
                                    | <a style="cursor: pointer;" class="text-muted" id="deleteReply_'.$replyId.'">
                                      Delete
                                    </a>
                                    | <a style="cursor: pointer;" class="text-muted" id="editReply_'.$replyId.'">
                                      Edit
                                    </a>
                                </span>
                            </div>
                        </li>
                    ';

        return new JsonResponse($data);
    }


    /**
     *@Route("/reply/delete", name="delete_reply")
     */
    public function deleteReplyAction(Request $request )
    {
        //ajax editing of a reply
        $data = [];

        $em = $this->getDoctrine()->getManager();

        $replyId = $request->request->get('id');


        $reply = $em->getRepository('AppBundle:CommentR')
            ->find($replyId);


        $em->remove($reply);
        $em->flush();


        $data['reply'] = "";
        
        return new JsonResponse($data);

    }

    /**
     *@Route("/reply/list/{commentId}", name="list_replies")
     */
    public function listReplyAction(Request $request, $commentId )
    {
        //show all replies for a specific comment and their replies
        $data = [];
        $em = $this->getDoctrine()->getManager();

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $data['user'] = $user;
        $comment = $em->getRepository('AppBundle:Comment')
            ->find($commentId);

        $replies = $em->getRepository('AppBundle:CommentR')
            ->findBy(
                array('comment' => $comment),
                array('id'=>'ASC')
            );
        $post = $comment->getPost();
        $data['post'] = $post;
        $data['replies'] = $replies;
        $data['comment'] = $comment;
        return $this->render('reply/list.html.twig', $data);
  
    }

    /**
     *@Route("/reply/edit", name="edit_reply")
     */
    public function editReplyAction(Request $request )
    {
        //ajax editing of a reply
        $data = [];

        $em = $this->getDoctrine()->getManager();

        $replyText = $request->request->get('reply');
        $replyId = $request->request->get('id');

        $user = $this->get('security.token_storage')->getToken()->getUser();

        $reply = $em->getRepository('AppBundle:CommentR')
            ->find($replyId);

        $reply->setBody($replyText);

        $em->persist($reply);
        $em->flush();


        $data['reply'] = $replyText;
        
        return new JsonResponse($data);
    }


}