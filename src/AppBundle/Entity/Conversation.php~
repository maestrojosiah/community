<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Conversation
 *
 * @ORM\Table(name="conversation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConversationRepository")
 */
class Conversation
{
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userOnes")
     * @ORM\JoinColumn(name="user_one", referencedColumnName="id")
     */

    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userTwos")
     * @ORM\JoinColumn(name="user_two", referencedColumnName="id")
     */

    private $userTwo;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=true)
     */
    private $time;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="ConversationR", mappedBy="conversation")
     */
    private $replies;

    public function __construct()
    {
        $this->replies = new ArrayCollection();
    }    



    /**
     * Set time
     *
     * @param integer $time
     *
     * @return Conversation
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
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
     * @return Conversation
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
     * Set userTwo
     *
     * @param \AppBundle\Entity\User $userTwo
     *
     * @return Conversation
     */
    public function setUserTwo(\AppBundle\Entity\User $userTwo = null)
    {
        $this->userTwo = $userTwo;

        return $this;
    }

    /**
     * Get userTwo
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserTwo()
    {
        return $this->userTwo;
    }

    /**
     * Add reply
     *
     * @param \AppBundle\Entity\ConversationR $reply
     *
     * @return Conversation
     */
    public function addReply(\AppBundle\Entity\ConversationR $reply)
    {
        $this->replies[] = $reply;

        return $this;
    }

    /**
     * Remove reply
     *
     * @param \AppBundle\Entity\ConversationR $reply
     */
    public function removeReply(\AppBundle\Entity\ConversationR $reply)
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
