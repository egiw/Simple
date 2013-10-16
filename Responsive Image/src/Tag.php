<?php

/**
 * @Entity @Table(name="tags")
 */
class Tag {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    protected $id;
    
    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;
    
    /**
     * @ManyToMany(targetEntity="Article", mappedBy="tags", cascade={"detach"})
     * @var Article[]
     */
    protected $articles;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    
    public function addToArticle(Article $article) {
        $this->articles[] = $article;
    }

}