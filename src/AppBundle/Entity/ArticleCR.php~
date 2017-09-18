<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleCR
 *
 * @ORM\Table(name="article_c_r")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticleCRRepository")
 */
class ArticleCR
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", length=100, nullable=false)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", length=65535, nullable=false)
     */
    private $body;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="articleCRs")
     * @ORM\JoinColumn(name="author", referencedColumnName="id")
     */

    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="ArticleC", inversedBy="replies")
     * @ORM\JoinColumn(name="comment_id", referencedColumnName="id")
     */

    private $comment;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ArticleCR
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
     * @return ArticleCR
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
     * @return ArticleCR
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
     * Set comment
     *
     * @param \AppBundle\Entity\ArticleC $comment
     *
     * @return ArticleCR
     */
    public function setComment(\AppBundle\Entity\ArticleC $comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return \AppBundle\Entity\ArticleC
     */
    public function getComment()
    {
        return $this->comment;
    }
}
