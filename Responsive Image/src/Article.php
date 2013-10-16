<?php

/**
 * @Entity @Table(name="articles")
 */
class Article {

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
    protected $title;

    /**
     * @Column(type="text")
     * @var string
     */
    protected $content;

    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $created;

    /**
     * @ManyToMany(targetEntity="Tag", inversedBy="articles", cascade={"detach"})
     * @var Tag[]
     */
    protected $tags;
    

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getCreated() {
        return $this->created;
    }

    public function setCreated(DateTime $created) {
        $this->created = $created;
    }

    public function addTag(Tag $tag) {
        $tag->addToArticle($this);
        $this->tags[] = $tag;
    }
    
    /**
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTags() {
        return $this->tags;
    }

}