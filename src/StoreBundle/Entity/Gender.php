<?php

namespace StoreBundle\Entity;
/**
 * Gender
 */
class Gender
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @ORM\\ManyToOne(targetEntity="StoreBundle\Entity\Category", inversedBy="genders")
     */
    private $category;


    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }
    public function getCategory()
    {
        return $this->category;
    }
    
    public function setCategory()
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Gender
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

