<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notifier
 *
 * @ORM\Table(name="notifier")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NotifierRepository")
 */
class Notifier
{
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="owner_id", type="integer", nullable=false)
     */
    private $ownerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id2", type="integer", nullable=false)
     */
    private $userId2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_done", type="datetime", length=100, nullable=false)
     */
    private $dateDone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="read_or_not", type="boolean", nullable=false)
     */
    private $readOrNot;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="notifications")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    private $post;


    /**
     * Set type
     *
     * @param string $type
     *
     * @return Notifier
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set ownerId
     *
     * @param integer $ownerId
     *
     * @return Notifier
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Set userId2
     *
     * @param integer $userId2
     *
     * @return Notifier
     */
    public function setUserId2($userId2)
    {
        $this->userId2 = $userId2;

        return $this;
    }

    /**
     * Get userId2
     *
     * @return integer
     */
    public function getUserId2()
    {
        return $this->userId2;
    }

    /**
     * Set dateDone
     *
     * @param \DateTime $dateDone
     *
     * @return Notifier
     */
    public function setDateDone($dateDone)
    {
        $this->dateDone = $dateDone;

        return $this;
    }

    /**
     * Get dateDone
     *
     * @return \DateTime
     */
    public function getDateDone()
    {
        return $this->dateDone;
    }

    /**
     * Set readOrNot
     *
     * @param boolean $readOrNot
     *
     * @return Notifier
     */
    public function setReadOrNot($readOrNot)
    {
        $this->readOrNot = $readOrNot;

        return $this;
    }

    /**
     * Get readOrNot
     *
     * @return boolean
     */
    public function getReadOrNot()
    {
        return $this->readOrNot;
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
     * Set post
     *
     * @param \AppBundle\Entity\Post $post
     *
     * @return Notifier
     */
    public function setPost(\AppBundle\Entity\Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \AppBundle\Entity\Post
     */
    public function getPost()
    {
        return $this->post;
    }
}
