<?php
/**
 * Created by PhpStorm.
 * User: Cyriaque MALDAT
 * Date: 27/04/2017
 * Time: 18:54
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="Questions")
 * @ORM\Entity
 */
class Questions
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id_question", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuestion;

    /**
     * @var \AppBundle\Entity\QCM
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\QCM")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_qcm", referencedColumnName="id_qcm")
     * })
     */
    private $idQCM;

    /**
     * @var \string
     *
     * @ORM\Column(name="question", type="string", length=500,nullable=false)
     */
    private $question;

    /**
     * @var \string
     *
     * @ORM\Column(name="the_response", type="string", length=500,nullable=false)
     */
    private $theResponse;

    /**
     * @ORM\Column(name="all_propose", type="text", nullable=false)
     */
    private $allPropose;

    /**
     * @return int
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * @param int $idQuestion
     */
    public function setIdQuestion($idQuestion)
    {
        $this->idQuestion = $idQuestion;
    }

    /**
     * @return QCM
     */
    public function getIdQCM()
    {
        return $this->idQCM;
    }

    /**
     * @param QCM $idQCM
     */
    public function setIdQCM($idQCM)
    {
        $this->idQCM = $idQCM;
    }

    /**
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param string $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function getTheResponse()
    {
        return $this->theResponse;
    }

    /**
     * @param string $theResponse
     */
    public function setTheResponse($theResponse)
    {
        $this->theResponse = $theResponse;
    }

    /**
     * @return mixed
     */
    public function getAllPropose()
    {
        return $this->allPropose;
    }

    /**
     * @param mixed $allPropose
     */
    public function setAllPropose($allPropose)
    {
        $this->allPropose = $allPropose;
    }
}