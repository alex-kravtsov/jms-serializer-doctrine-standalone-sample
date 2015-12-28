<?php

use JMS\Serializer\Annotation\Type;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity @ORM\Table(name="products")
*/
class Product {

    /**
    * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue
    * @Type("integer")
    * @var int
    */
    protected $id;
    /**
    * @ORM\Column(type="string")
    * @Type("string")
    * @var string
    */
    protected $title;
    /**
    * @ORM\Column(type="string")
    * @Type("string")
    * @var string
    */
    protected $description;
    /**
    * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
    * @Type("Category")
    * @var Category
    */
    protected $category;

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category){
        $this->category = $category;
    }

}
