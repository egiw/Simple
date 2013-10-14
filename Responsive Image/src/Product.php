<?php

/**
 * 
 * @Entity @Table(name="products")
 */
class Product {

    /**
     *
     * @var int
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(type="string")
     */
    protected $name;

    /**
     * @ManyToMany(targetEntity="Bug", mappedBy="products")
     * @var Bug[]
     */
    protected $bugs;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    /**
     * Get the bugs of the product
     * @return Bug[]
     */
    public function getBugs() {
        return $this->bugs;
    }
}