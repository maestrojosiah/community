<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConversationR
 *
 * @ORM\Table(name="conversation_r")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConversationRRepository")
 */
class ConversationR
{
    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", length=65535, nullable=true)
     */
    private $body;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="conversationRs")
     * @ORM\JoinColumn(name="author", referencedColumnName="id")
     */

    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", length=100, nullable=false)
     */
    private $created;

    /**
     * @ORM\ManyToOne(targetEntity="Conversation", inversedBy="replies")
     * @ORM\JoinColumn(name="c_id", referencedColumnName="id")
     */

    private $conversation;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="sentTos")
     * @ORM\JoinColumn(name="sent_to", referencedColumnName="id")
     */

    private $sentTo;


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set body
     *
     * @param string $body
     *
     * @return ConversationR
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ConversationR
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
     * @return ConversationR
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
     * Set conversation
     *
     * @param \AppBundle\Entity\Conversation $conversation
     *
     * @return ConversationR
     */
    public function setConversation(\AppBundle\Entity\Conversation $conversation = null)
    {
        $this->conversation = $conversation;

        return $this;
    }

    /**
     * Get conversation
     *
     * @return \AppBundle\Entity\Conversation
     */
    public function getConversation()
    {
        return $this->conversation;
    }

    /**
     * Set sentTo
     *
     * @param \AppBundle\Entity\User $sentTo
     *
     * @return ConversationR
     */
    public function setSentTo(\AppBundle\Entity\User $sentTo = null)
    {
        $this->sentTo = $sentTo;

        return $this;
    }

    /**
     * Get sentTo
     *
     * @return \AppBundle\Entity\User
     */
    public function getSentTo()
    {
        return $this->sentTo;
    }
}
