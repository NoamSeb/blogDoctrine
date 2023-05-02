<?php
/** @Entity @Table (name="message")**/
class Message
{
    /** @Id @Column (type="integer") @GeneratedValue**/
    private $id_message;

    /** @Column(type="string") **/
    private $text;

    /** @Column(type="string", nullable=true) **/
    private $datepost;

    /** 
     * @ManyToOne(targetEntity="Utilisateur")
     * @JoinColumn(nullable=false) 
     */
    private $Utilisateur;

    /** 
     * @ManyToOne(targetEntity="Article", inversedBy="id_article")
     * @JoinColumn(name="id_article", referencedColumnName="id_article")
     */
    private $article = null;


    public function setId(int $id)
    {
        $this->id_message = $id;
    }
    public function getId()
    {
        return $this->id_message;
    }

    public function setText(string $text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }
    public function setDate(string $datepost)
    {
        $this->datepost = $datepost;
    }

    public function getDate()
    {
        return $this->datepost;
    }
    public function setUtilisateur($Utilisateur)
    {
        $this->Utilisateur = $Utilisateur;
    }

    public function getUtilisateur()
    {
        return $this->Utilisateur;
    }

    public function setArticle($article)
    {
        $this->article = $article;
    }

    public function getArticle()
    {
        return $this->article;
    }
}