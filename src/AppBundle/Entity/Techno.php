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
 * Techno
 *
 * @ORM\Table(name="Techno")
 * @ORM\Entity
 */
class Techno
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_techno", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTechno;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255,nullable=false)
     */
    private $name;

    /**
     * @return int
     */
    public function getIdTechno()
    {
        return $this->idTechno;
    }

    /**
     * @param int $idTechno
     */
    public function setIdTechno($idTechno)
    {
        $this->idTechno = $idTechno;
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
}