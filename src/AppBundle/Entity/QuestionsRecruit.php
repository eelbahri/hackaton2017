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
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=500, nullable=false)
     */
    private $question;

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
     * @return QuestionsRecruit
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
     * @return QuestionsRecruit
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
     * @return QuestionsRecruit
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
