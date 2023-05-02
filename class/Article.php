<?php
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/** @Entity @Table (name="article")**/
class Article
{
    /** @Id @Column (type="integer") @GeneratedValue**/
    private $id_article;

    /** @Column(type="string") **/
    private $name_article;

    /** @Column(type="string") **/
    private $content_article;

    /** @Column(type="datetime") **/
    private $date_article;

     /** 
     * @ManyToOne(targetEntity="Utilisateur")
     * @JoinColumn(nullable=false) 
     */
    private $Utilisateur;

     /** 
     * @OneToMany(targetEntity="Message", mappedBy="article")
     */
    private Collection $comments;

    public function __construct() {
        $this->comments = new ArrayCollection();
    }

    public function setId(int $id)
    {
        $this->id_article = $id;
    }
    public function getId()
    {
        return $this->id_article;
    }
    public function setName(string $name)
    {
        $this->name_article = $name;
    }
    public function getName()
    {
        return $this->name_article;
    }

    public function setContent(string $content)
    {
        $this->content_article = $content;
    }

    public function getContent()
    {
        return $this->content_article;
    }
    public function setDate(datetime $date)
    {
        $this->date_article = $date;
    }

    public function getDate()
    {
        return $this->date_article;
    }
    public function setUtilisateur($Utilisateur)
    {
        $this->Utilisateur = $Utilisateur;
    }

    public function getUtilisateur()
    {
        return $this->Utilisateur;
    }
    public function setComments($message)
    {
        $this->comments = $message;
    }

    public function getComments()
    {
        return $this->comments;
    }
}