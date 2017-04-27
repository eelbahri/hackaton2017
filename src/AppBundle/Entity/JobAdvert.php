<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobAdvert
 *
 * @ORM\Table(name="job_advert")
 * @ORM\Entity
 */
class JobAdvert
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=500, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="salary_min", type="integer", nullable=false)
     */
    private $salaryMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="salary_max", type="integer", nullable=false)
     */
    private $salaryMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_place", type="integer", nullable=false)
     */
    private $nbPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="text", length=65535, nullable=false)
     */
    private $tags;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_job_advert", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJobAdvert;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return JobAdvert
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return JobAdvert
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set salaryMin
     *
     * @param integer $salaryMin
     *
     * @return JobAdvert
     */
    public function setSalaryMin($salaryMin)
    {
        $this->salaryMin = $salaryMin;

        return $this;
    }

    /**
     * Get salaryMin
     *
     * @return integer
     */
    public function getSalaryMin()
    {
        return $this->salaryMin;
    }

    /**
     * Set salaryMax
     *
     * @param integer $salaryMax
     *
     * @return JobAdvert
     */
    public function setSalaryMax($salaryMax)
    {
        $this->salaryMax = $salaryMax;

        return $this;
    }

    /**
     * Get salaryMax
     *
     * @return integer
     */
    public function getSalaryMax()
    {
        return $this->salaryMax;
    }

    /**
     * Set nbPlace
     *
     * @param integer $nbPlace
     *
     * @return JobAdvert
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    /**
     * Get nbPlace
     *
     * @return integer
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }

    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return JobAdvert
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return JobAdvert
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
     * Get idJobAdvert
     *
     * @return integer
     */
    public function getIdJobAdvert()
    {
        return $this->idJobAdvert;
    }
}
