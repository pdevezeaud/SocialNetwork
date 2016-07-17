<?php

namespace TechCorp\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use TechCorp\FrontBundle\Entity\Status;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */



class User 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    Protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @ORM\OneToMany(targetEntity="Status", mappedBy="user")
     */
    protected $statuses;

    public function __construct()
    {
        parent::__construct();
        $this->statuses = new ArrayCollection();
    }

    /**
     * Add status
     *
     * @param \TechCorp\FrontBundle\Entity\Status $status
     *
     * @return User
     */
    public function addStatus(\TechCorp\FrontBundle\Entity\Status $status)
    {
        $this->statuses[] = $status;

        return $this;
    }

    /**
     * Remove status
     *
     * @param \TechCorp\FrontBundle\Entity\Status $status
     */
    public function removeStatus(\TechCorp\FrontBundle\Entity\Status $status)
    {
        $this->statuses->removeElement($status);
    }

    /**
     * Get statuses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStatuses()
    {
        return $this->statuses;
    }
}
