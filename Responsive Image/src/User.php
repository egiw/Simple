<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="users")
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

    /**
     *
     * @OneToMany(targetEntity="Bug", mappedBy="reporter")
     * @var Bug[]
     */
    protected $reportedBugs;

    /**
     *
     * @OneToMany(targetEntity="Bug", mappedBy="engineer")
     * @var Bug[]
     */
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

    public function addReportedBug($bug) {
        $this->reportedBugs[] = $bug;
    }

    public function assignedToBug($bug) {
        $this->assignedBugs[] = $bug;
    }
}