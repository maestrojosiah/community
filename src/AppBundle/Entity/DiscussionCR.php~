<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiscussionCR
 *
 * @ORM\Table(name="discussion_c_r")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DiscussionCRRepository")
 */
class DiscussionCR
{
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="discussionCRs")
     * @ORM\JoinColumn(name="author", referencedColumnName="id")
     */

    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", length=65535, nullable=false)
     */
    private $body;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", length=100, nullable=false)
     */
    private $created;

    /**
     * @ORM\ManyToOne(targetEntity="DiscussionC", inversedBy="replies")
     * @ORM\JoinColumn(name="discussion_id", referencedColumnName="id")
     */
    private $discCcomment;


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
     * @return DiscussionCR
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
     * @return DiscussionCR
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
     * @return DiscussionCR
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
     * Set discCcomment
     *
     * @param \AppBundle\Entity\DiscussionC $discCcomment
     *
     * @return DiscussionCR
     */
    public function setDiscCcomment(\AppBundle\Entity\DiscussionC $discCcomment = null)
    {
        $this->discCcomment = $discCcomment;

        return $this;
    }

    /**
     * Get discCcomment
     *
     * @return \AppBundle\Entity\DiscussionC
     */
    public function getDiscCcomment()
    {
        return $this->discCcomment;
    }
}
