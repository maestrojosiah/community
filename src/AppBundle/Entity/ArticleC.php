<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ArticleC
 *
 * @ORM\Table(name="article_c")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticleCRepository")
 */
class ArticleC
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", length=100, nullable=false)
     */
    private $created;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="articleCs")
     * @ORM\JoinColumn(name="author", referencedColumnName="id")
     */

    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="comments")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     */

    private $article;
    
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
     * @ORM\OneToMany(targetEntity="ArticleC", mappedBy="article")
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
     * @return ArticleC
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
     * @return ArticleC
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
     * @return ArticleC
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
     * Set article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return ArticleC
     */
    public function setArticle(\AppBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \AppBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Add reply
     *
     * @param \AppBundle\Entity\ArticleC $reply
     *
     * @return ArticleC
     */
    public function addReply(\AppBundle\Entity\ArticleC $reply)
    {
        $this->replies[] = $reply;

        return $this;
    }

    /**
     * Remove reply
     *
     * @param \AppBundle\Entity\ArticleC $reply
     */
    public function removeReply(\AppBundle\Entity\ArticleC $reply)
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
