<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="users)
 */
class User {

    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    protected $id;
    
    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;

    protected $reportedBugs;
    protected $assignedBugs;
    
    public function __construct() {
        $this->reportedBugs = new ArrayCollection();
        $this->assignedBugs = new ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

}