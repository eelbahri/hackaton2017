<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminUsers
 *
 * @ORM\Table(name="admin_users", uniqueConstraints={@ORM\UniqueConstraint(name="mail", columns={"mail"})})
 * @ORM\Entity
 */
class AdminUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="fisrt_name", type="string", length=255, nullable=false)
     */
    private $fisrtName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text", length=65535, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_connection", type="datetime", nullable=false)
     */
    private $lastConnection = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_adress", type="integer", nullable=false)
     */
    private $lastAdress;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_admin_users", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdminUsers;



    /**
     * Set fisrtName
     *
     * @param string $fisrtName
     *
     * @return AdminUsers
     */
    public function setFisrtName($fisrtName)
    {
        $this->fisrtName = $fisrtName;

        return $this;
    }

    /**
     * Get fisrtName
     *
     * @return string
     */
    public function getFisrtName()
    {
        return $this->fisrtName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return AdminUsers
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return AdminUsers
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return AdminUsers
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set lastConnection
     *
     * @param \DateTime $lastConnection
     *
     * @return AdminUsers
     */
    public function setLastConnection($lastConnection)
    {
        $this->lastConnection = $lastConnection;

        return $this;
    }

    /**
     * Get lastConnection
     *
     * @return \DateTime
     */
    public function getLastConnection()
    {
        return $this->lastConnection;
    }

    /**
     * Set lastAdress
     *
     * @param integer $lastAdress
     *
     * @return AdminUsers
     */
    public function setLastAdress($lastAdress)
    {
        $this->lastAdress = $lastAdress;

        return $this;
    }

    /**
     * Get lastAdress
     *
     * @return integer
     */
    public function getLastAdress()
    {
        return $this->lastAdress;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return AdminUsers
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Get idAdminUsers
     *
     * @return integer
     */
    public function getIdAdminUsers()
    {
        return $this->idAdminUsers;
    }
}
