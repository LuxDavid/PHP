<?php

class Usuario{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $imagen;
    private $db;

    public function __construct(){
        $this->db=DataBase::connect();
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function setApellidos($apellidos) {
        $this->apellidos =  $this->db->real_escape_string($apellidos);
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email =  $this->db->real_escape_string($email);
    }

    function getPassword() {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost'=>4]);
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function getRol() {
        return $this->rol;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function save(){
        $sql= "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}','{$this->getEmail()}', '{$this->getPassword()}', 'user', null)";
        $save= $this->db->query($sql);

        $result=false;
        if($save){
            $result=true;
        }
        return $result;
    }

    public function login(){
        $result=false;
        $email= $this->email;
        $password= $this->password;

        //Comprobar si existe el usuario
        $sql="SELECT * From usuarios WHERE email= '$email'";
        $login=$this->db->query($sql);

        if($login && $login->num_rows == 1){

            $usuario=$login->fetch_object();

            //Verificar la contraseña
            $verify= password_verify($password, $usuario->password);
            
            if($verify){
                $result=$usuario;
            }
        }

        return $result;
    }
}
