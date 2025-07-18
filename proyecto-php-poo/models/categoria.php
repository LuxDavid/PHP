<?php

class Categoria{
    private $id;
    private $nombre;
    private $db;

    public function __construct(){
        $this->db=DataBase::connect();
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id=$id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre=$this->db->real_escape_string($nombre);
    }

    public function getAllCategorias(){
        $categorias=$this->db->query("SELECT * FROM categorias ORDER BY id DESC");
        return $categorias;
    }

    public function getOne(){
         $categoria=$this->db->query("SELECT * FROM categorias WHERE id={$this->getId()}");
        return $categoria->fetch_object();
    }

    public function save(){
        $sql= "INSERT INTO categorias VALUES(NULL, '{$this->getNombre()}');";
        $save=$this->db->query($sql);

        $result=false;
        if($save){
            $result=true;
        }
        return $result;
    }

}
