<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionsRecruit
 *
 * @ORM\Table(name="questions_recruit")
 * @ORM\Entity
 */
class QuestionsRecruit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=500, nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="string", length=500,nullable=true)
     */
    private $response = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_list", type="integer", nullable=true)
     */
    private $orderList;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

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
     * @return int
     */
    public function getOrderList()
    {
        return $this->orderList;
    }

    /**
     * @param int $orderList
     */
    public function setOrderList($orderList)
    {
        $this->orderList = $orderList;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param string $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }

}
