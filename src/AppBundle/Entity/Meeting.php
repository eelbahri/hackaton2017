<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="meeting")
 */
class Meeting
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     * @ORM\Column(name="id_user",type="integer")
     */
    private $idUsers;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_start",type="datetime")
     */
    private $dateStart;

    /**
     * @var int
     * @ORM\Column(name="date_end",type="datetime")
     */
    private $dateEnd;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUsers
     *
     * @param integer $idUsers
     *
     * @return Meeting
     */
    public function setIdUsers($idUsers)
    {
        $this->idUsers = $idUsers;

        return $this;
    }

    /**
     * Get idUsers
     *
     * @return int
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return Meeting
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param integer $dateEnd
     *
     * @return Meeting
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return int
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }
}

