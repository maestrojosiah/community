<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberGroup
 *
 * @ORM\Table(name="member_group")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MemberGroupRepository")
 */
class MemberGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="memberGroups")
     * @ORM\JoinColumn(name="member", referencedColumnName="id")
     */
    
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="theGroups")
     * @ORM\JoinColumn(name="the_group", referencedColumnName="id")
     */
    
    private $group;


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
     * @return MemberGroup
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
     * Set group
     *
     * @param \AppBundle\Entity\User $group
     *
     * @return MemberGroup
     */
    public function setGroup(\AppBundle\Entity\User $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \AppBundle\Entity\User
     */
    public function getGroup()
    {
        return $this->group;
    }
}
