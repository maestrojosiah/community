<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * DiscussionC
 *
 * @ORM\Table(name="discussion_c")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DiscussionCRepository")
 */
class DiscussionC
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", length=100, nullable=false)
     */
    private $created;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="discussionCs")
     * @ORM\JoinColumn(name="author", referencedColumnName="id")
     */

    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Discussion", inversedBy="comments")
     * @ORM\JoinColumn(name="discussion_id", referencedColumnName="id")
     */
    private $discussion;

    
    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", length=65535, nullable=false)
     */
    private $body;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="DiscussionCR", mappedBy="discCcomment")
     */
    private $replies;

    public function __construct()
    {
        $this->replies = new ArrayCollection();
    }    


    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return DiscussionC
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return DiscussionC
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return DiscussionC
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set discussion
     *
     * @param \AppBundle\Entity\Discussion $discussion
     *
     * @return DiscussionC
     */
    public function setDiscussion(\AppBundle\Entity\Discussion $discussion = null)
    {
        $this->discussion = $discussion;

        return $this;
    }

    /**
     * Get discussion
     *
     * @return \AppBundle\Entity\Discussion
     */
    public function getDiscussion()
    {
        return $this->discussion;
    }

    /**
     * Add reply
     *
     * @param \AppBundle\Entity\DiscussionCR $reply
     *
     * @return DiscussionC
     */
    public function addReply(\AppBundle\Entity\DiscussionCR $reply)
    {
        $this->replies[] = $reply;

        return $this;
    }

    /**
     * Remove reply
     *
     * @param \AppBundle\Entity\DiscussionCR $reply
     */
    public function removeReply(\AppBundle\Entity\DiscussionCR $reply)
    {
        $this->replies->removeElement($reply);
    }

    /**
     * Get replies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReplies()
    {
        return $this->replies;
    }
}
