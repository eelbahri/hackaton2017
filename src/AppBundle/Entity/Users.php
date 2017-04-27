<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="id_facebook", columns={"id_facebook"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="id_facebook", type="string", length=255, nullable=false)
     */
    private $idFacebook;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone_number", type="integer", nullable=false)
     */
    private $phoneNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_born", type="date", nullable=false)
     */
    private $dateBorn;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_active", type="integer", nullable=false)
     */
    private $isActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_users", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsers;



    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Users
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Users
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set idFacebook
     *
     * @param string $idFacebook
     *
     * @return Users
     */
    public function setIdFacebook($idFacebook)
    {
        $this->idFacebook = $idFacebook;

        return $this;
    }

    /**
     * Get idFacebook
     *
     * @return string
     */
    public function getIdFacebook()
    {
        return $this->idFacebook;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     *
     * @return Users
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return integer
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set dateBorn
     *
     * @param \DateTime $dateBorn
     *
     * @return Users
     */
    public function setDateBorn($dateBorn)
    {
        $this->dateBorn = $dateBorn;

        return $this;
    }

    /**
     * Get dateBorn
     *
     * @return \DateTime
     */
    public function getDateBorn()
    {
        return $this->dateBorn;
    }

    /**
     * Set isActive
     *
     * @param integer $isActive
     *
     * @return Users
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return integer
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Get idUsers
     *
     * @return integer
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }
}
