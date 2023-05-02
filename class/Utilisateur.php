<?php
/** @Entity @Table (name="Utilisateur")**/
class Utilisateur
{
    /** @Id @Column (type="integer") @GeneratedValue**/
    private $id;

    /** @Column(type="string") **/
    private $login;

    /** @Column(type="string") **/
    private $password;

    public function setId(int $id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }

    public function setLogin(string $login){
        $this->login=$login;
    }

    public function getLogin(){
        return $this->login;
    }
    public function setPassword(string $password){
        $this->password = $password;
        return $this;
    }

    public function getPassword(){
        return $this->password;
    }
}