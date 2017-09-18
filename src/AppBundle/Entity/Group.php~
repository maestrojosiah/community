<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Group
 *
 * @ORM\Table(name="group", uniqueConstraints={@ORM\UniqueConstraint(name="group_name", columns={"group_name"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GroupRepository")
 */
class Group
{
    /**
     * @var string
     *
     * @ORM\Column(name="group_name", type="string", length=100, nullable=false)
     */
    private $groupName;

    /**
     * @var string
     *
     * @ORM\Column(name="group_lang", type="string", length=50, nullable=false)
     */
    private $groupLang;

    /**
     * @var string
     *
     * @ORM\Column(name="group_desc", type="string", length=655, nullable=false)
     */
    private $groupDesc;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="groups")
     * @ORM\JoinColumn(name="group_author", referencedColumnName="id")
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Post", mappedBy="group")
     */
    private $posts;

    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }    

    /**
     * Set groupName
     *
     * @param string $groupName
     *
     * @return Group
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set groupLang
     *
     * @param string $groupLang
     *
     * @return Group
     */
    public function setGroupLang($groupLang)
    {
        $this->groupLang = $groupLang;

        return $this;
    }

    /**
     * Get groupLang
     *
     * @return string
     */
    public function getGroupLang()
    {
        return $this->groupLang;
    }

    /**
     * Set groupDesc
     *
     * @param string $groupDesc
     *
     * @return Group
     */
    public function setGroupDesc($groupDesc)
    {
        $this->groupDesc = $groupDesc;

        return $this;
    }

    /**
     * Get groupDesc
     *
     * @return string
     */
    public function getGroupDesc()
    {
        return $this->groupDesc;
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
     * @return Group
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
     * Add post
     *
     * @param \AppBundle\Entity\Post $post
     *
     * @return Group
     */
    public function addPost(\AppBundle\Entity\Post $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \AppBundle\Entity\Post $post
     */
    public function removePost(\AppBundle\Entity\Post $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
