<?php
/**
 * Created by PhpStorm.
 * User: Cyriaque MALDAT
 * Date: 27/04/2017
 * Time: 18:11
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * qcm
 *
 * @ORM\Table(name="qcm")
 * @ORM\Entity
 */

class QCM
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_qcm", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQCM;

    /**
     * @var \string
     *
     * @ORM\Column(name="techno", type="string", nullable=false)
     * })
     */
    private $techno;

    /**
     * @var \string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time;

    /**
     * @return int
     */
    public function getIdQCM()
    {
        return $this->idQCM;
    }

    /**
     * @param int $idQCM
     */
    public function setIdQCM($idQCM)
    {
        $this->idQCM = $idQCM;
    }

    /**
     * @return string
     */
    public function getTechno()
    {
        return $this->techno;
    }

    /**
     * @param string $techno
     */
    public function setTechno($techno)
    {
        $this->techno = $techno;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param int $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }
}