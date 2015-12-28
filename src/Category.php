<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;

/**
* @ORM\Entity @ORM\Table(name="categories")
*/
class Category {
    
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
    * @ORM\OneToMany(targetEntity="Product", mappedBy="category", cascade={"persist", "remove"})
    * @Type("ArrayCollection<Product>")
    * @var Product[]
    */
    protected $products;

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function addProduct($product){
        $this->products[] = $product;
    }

    public function getProducts(){
        return $this->products;
    }

    public function __construct(){
        $this->products = new ArrayCollection();
    }

}
