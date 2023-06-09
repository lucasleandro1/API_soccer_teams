<?php
class Time{
    private $id;
    private $nome;
    private $ano;
    private $libertadores;
    private $brasileirao;
    private $estadual;
    private $copadobrasil;
    

    public function __construct($nome,$ano,$libertadores,$brasileirao,$estadual,$copadobrasil)
    {
        $this->nome=$nome;
        $this->ano=$ano;
        $this->libertadores=$libertadores;
        $this->brasileirao=$brasileirao;
        $this->estadual=$estadual;
        $this->copadobrasil=$copadobrasil;

    }

    public function setId($id){
        $this->id=$id;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setAno($ano){
        $this->ano=$ano;
    }
    public function setLibertadores($libertadores){
        $this->libertadores=$libertadores;
    }
    public function setBrasileirao($brasileirao){
        $this->brasileirao=$brasileirao;
    }
    public function setEstadual($estadual){
        $this->estadual=$estadual;
    }
    public function setCopadobrasil($copadobrasil){
        $this->copadobrasil=$copadobrasil;
    }
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getAno(){
        return $this->ano;
    }
    public function getLibertadores(){
        return $this->libertadores;
    }
    public function getBrasileirao(){
        return $this->brasileirao;
    }
    public function getEstadual(){
        return $this->estadual;
    }
    public function getCopadobrasil(){
        return $this->copadobrasil;
    }
















}



?>