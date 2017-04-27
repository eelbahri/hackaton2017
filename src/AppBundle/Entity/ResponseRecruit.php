<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponseRecruit
 *
 * @ORM\Table(name="response_recruit", indexes={@ORM\Index(name="id_users", columns={"id_users"}), @ORM\Index(name="id_questions", columns={"id_questions"})})
 * @ORM\Entity
 */
class ResponseRecruit
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
     * @ORM\Column(name="id_response_recruit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idResponseRecruit;

    /**
     * @var \AppBundle\Entity\QuestionsRecruit
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\QuestionsRecruit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_questions", referencedColumnName="id")
     * })
     */
    private $idQuestions;

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
     * Set response
     *
     * @param string $response
     *
     * @return ResponseRecruit
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
     * Get idResponseRecruit
     *
     * @return integer
     */
    public function getIdResponseRecruit()
    {
        return $this->idResponseRecruit;
    }

    /**
     * Set idQuestions
     *
     * @param \AppBundle\Entity\QuestionsRecruit $idQuestions
     *
     * @return ResponseRecruit
     */
    public function setIdQuestions(\AppBundle\Entity\QuestionsRecruit $idQuestions = null)
    {
        $this->idQuestions = $idQuestions;

        return $this;
    }

    /**
     * Get idQuestions
     *
     * @return \AppBundle\Entity\QuestionsRecruit
     */
    public function getIdQuestions()
    {
        return $this->idQuestions;
    }

    /**
     * Set idUsers
     *
     * @param \AppBundle\Entity\Users $idUsers
     *
     * @return ResponseRecruit
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
}
