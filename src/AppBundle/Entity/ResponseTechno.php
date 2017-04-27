<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponseTechno
 *
 * @ORM\Table(name="response_techno", indexes={@ORM\Index(name="id_users", columns={"id_users"}), @ORM\Index(name="id_questions", columns={"id_questions"})})
 * @ORM\Entity
 */
class ResponseTechno
{
    /**
     * @var string
     *
     * @ORM\Column(name="response", type="text", length=65535, nullable=false)
     */
    private $response;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_response_techno", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idResponseTechno;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_users", referencedColumnName="id_users")
     * })
     */
    private $idUsers;

    /**
     * @var \AppBundle\Entity\QuestionsTechno
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\QuestionsTechno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_questions", referencedColumnName="id")
     * })
     */
    private $idQuestions;



    /**
     * Set response
     *
     * @param string $response
     *
     * @return ResponseTechno
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Get idResponseTechno
     *
     * @return integer
     */
    public function getIdResponseTechno()
    {
        return $this->idResponseTechno;
    }

    /**
     * Set idUsers
     *
     * @param \AppBundle\Entity\Users $idUsers
     *
     * @return ResponseTechno
     */
    public function setIdUsers(\AppBundle\Entity\Users $idUsers = null)
    {
        $this->idUsers = $idUsers;

        return $this;
    }

    /**
     * Get idUsers
     *
     * @return \AppBundle\Entity\Users
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    /**
     * Set idQuestions
     *
     * @param \AppBundle\Entity\QuestionsTechno $idQuestions
     *
     * @return ResponseTechno
     */
    public function setIdQuestions(\AppBundle\Entity\QuestionsTechno $idQuestions = null)
    {
        $this->idQuestions = $idQuestions;

        return $this;
    }

    /**
     * Get idQuestions
     *
     * @return \AppBundle\Entity\QuestionsTechno
     */
    public function getIdQuestions()
    {
        return $this->idQuestions;
    }
}
