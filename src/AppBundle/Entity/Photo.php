<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PhotoRepository")
 */
class Photo
{
    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=100, nullable=false)
     * @Assert\Image(
     *     maxSize = "5242880",
     *     mimeTypes = {"image/jpeg", "image/png", "image/gif" },
     *     mimeTypesMessage = "Please upload a JPG, PNG or Gif image."
     * )
     */ 
    private $filename;
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type;
    /**
     * @var integer
     *
     * @ORM\Column(name="profile", type="integer", nullable=false)
     */
    private $profile;
    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="integer", nullable=false)
     */
    private $size;
    /**
     * @var string
     *
     * @ORM\Column(name="caption", type="text", length=65535, nullable=false)
     */
    private $caption;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="photos")
     * @ORM\JoinColumn(name="owner", referencedColumnName="id")
     */
    private $user;
    
    /**
     * @ORM\OneToMany(targetEntity="PhotoC", mappedBy="photo")
     */
    private $comments;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->profile = false;
    }  

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Photo
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }
    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }
    /**
     * Set type
     *
     * @param string $type
     *
     * @return Photo
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
     * Set profile
     *
     * @param integer $profile
     *
     * @return Photo
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }
    /**
     * Get profile
     *
     * @return integer
     */
    public function getProfile()
    {
        return $this->profile;
    }
    /**
     * Set size
     *
     * @param integer $size
     *
     * @return Photo
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set caption
     *
     * @param string $caption
     *
     * @return Photo
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }
    /**
     * Get caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
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
     * @return Photo
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
     * Add comment
     *
     * @param \AppBundle\Entity\PhotoC $comment
     *
     * @return Photo
     */
    public function addComment(\AppBundle\Entity\PhotoC $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }
    /**
     * Remove comment
     *
     * @param \AppBundle\Entity\PhotoC $comment
     */
    public function removeComment(\AppBundle\Entity\PhotoC $comment)
    {
        $this->comments->removeElement($comment);
    }
    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }
}
