<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionsTechno
 *
 * @ORM\Table(name="questions_techno", uniqueConstraints={@ORM\UniqueConstraint(name="orer_list", columns={"order_list"})})
 * @ORM\Entity
 */
class QuestionsTechno
{
    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=500, nullable=false)
     */
    private $question;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_list", type="integer", nullable=false)
     */
    private $orderList;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set question
     *
     * @param string $question
     *
     * @return QuestionsTechno
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set orderList
     *
     * @param integer $orderList
     *
     * @return QuestionsTechno
     */
    public function setOrderList($orderList)
    {
        $this->orderList = $orderList;

        return $this;
    }

    /**
     * Get orderList
     *
     * @return integer
     */
    public function getOrderList()
    {
        return $this->orderList;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return QuestionsTechno
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
