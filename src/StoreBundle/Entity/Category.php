<?php

namespace StoreBundle\Entity;
/**
 * Category
 */
class Category
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="StoreBundle\Entity\Article", mappedBy="category")
     */
    private $articles;

    /**
     * @ORM\OneToMany(targetEntity="StoreBundle\Entity\Gender", mappedBy="category")
     */
    private $gender;

    /**
     * Get id
     *
     * @return int
     */

    public function setGender()
    {
        return $this->gender;
    }

    public function getGender()
    {
        $this->gender = $gender;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

