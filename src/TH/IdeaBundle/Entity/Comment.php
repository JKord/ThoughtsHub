<?php
namespace TH\IdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM,
    Gedmo\Mapping\Annotation as Gedmo;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="FK_comments_fos_user", columns={"user_id"}), @ORM\Index(name="FK_comments_thoughts", columns={"thoughts_id"})})
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="TH\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Thoughts
     *
     * @ORM\ManyToOne(targetEntity="Thought")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="thoughts_id", referencedColumnName="id")
     * })
     */
    private $thoughts;

    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;



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
     * Set text
     *
     * @param string $text
     * @return Comment
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Comment
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
     * Set updated
     *
     * @param \DateTime $updated
     * @return Comment
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set user
     *
     * @param \TH\UserBundle\Entity\User $user
     * @return Comment
     */
    public function setUser(\TH\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \TH\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set thoughts
     *
     * @param \TH\IdeaBundle\Entity\Thought $thoughts
     * @return Comment
     */
    public function setThoughts(\TH\IdeaBundle\Entity\Thought $thoughts = null)
    {
        $this->thoughts = $thoughts;

        return $this;
    }

    /**
     * Get thoughts
     *
     * @return \TH\IdeaBundle\Entity\Thought 
     */
    public function getThoughts()
    {
        return $this->thoughts;
    }
}
