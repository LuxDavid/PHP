<?php

class Producto{
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;
    private $db;

    public function __construct(){
        $this->db=DataBase::connect();
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id= $id;
    }

    function getCategoria_id() {
        return $this->categoria_id;
    }

    function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    function getPrecio() {
        return $this->precio;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function getStock() {
        return $this->stock;
    }

    function setStock($stock) {
        $this->stock = $stock;
    }

    function getOferta() {
        return $this->oferta;
    }

    function setOferta($oferta) {
        $this->oferta = $oferta;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function getAll(){
        $products= $this->db->query("SELECT * FROM productos ORDER BY id DESC");
        return $products;
    } 

    public function getAllCategory(){
        $sql="SELECT p.*, c.nombre AS 'catnombre' FROM productos p 
            INNER JOIN categorias c ON c.id = p.categoria_id 
            WHERE p.categoria_id = {$this->getCategoria_id()}
            ORDER BY id DESC";
        $products= $this->db->query($sql);
        return $products;
    } 

    public function getRandom($limit){
        $productos=$this->db->query("SELECT * FROM productos ORDER BY RAND() LIMIT $limit");
        return $productos;
    }

      public function getOne(){
        $producto= $this->db->query("SELECT * FROM productos WHERE id={$this->getId()}");
        return $producto->fetch_object();
    } 

   
    public function save(){
        $sql= "INSERT INTO productos VALUES(NULL, {$this->getCategoria_id()}, '{$this->getNombre()}','{$this->getDescripcion()}',{$this->getPrecio()}, {$this->getStock()}, NULL, CURDATE(), '{$this->getImagen()}');";
        $save= $this->db->query($sql);

        $result=false;
        if($save){
            $result=true;
        }
        return $result;
    }

     public function edit(){
        $sql= "UPDATE productos SET nombre='{$this->getNombre()}', descripcion='{$this->getDescripcion()}', precio={$this->getPrecio()}, stock={$this->getStock()}, categoria_id={$this->getCategoria_id()} ";

        if($this->getImagen() != null){
            $sql .=", imagen='{$this->getImagen()}'";
        }

        $sql .="WHERE id={$this->id};";

        $save= $this->db->query($sql);

        $result=false;
        if($save){
            $result=true;
        }
        return $result;
    }

    public function delete(){
        $sql="DELETE FROM productos WHERE id={$this->id}";
        var_dump($sql);
        $delete= $this->db->query($sql);

        $result=false;
        if($delete){
            $result= true;
        }
        return $result;
    
    }
}
