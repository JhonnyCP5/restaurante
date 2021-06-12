<?php
    include_once('./utils/conexion.php');
    //include_once('./cnxPDO.php');
    class Usuario{

        private $ci;
        private $nombres;
        private $ap_paterno;
        private $ap_materno;
        private $fehca_nacimiento;
        private $telefono;
        private $email;
        private $direccion;
        private $cargo;
        private $contrasena;
        private $fecha_registro;
        private $salario;
    
    
        function Usuario(){

            $this->ci = "";
            $this->nombres = "";
            $this->ap_paterno = "";
            $this->ap_materno = "";
            $this->fecha_nacimiento = "";
            $this->telefono = "";
            $this->email = "";
            $this->direccion = "";
            $this->cargo = "";
            $this->contrasena = "";
            $this->fecha_registro = "";
            $this->salario = "";
           // $conn = new Conexion();
            
        }
        function setci($ci){
            $this->ci = $ci;
      
        }
        function getci(){
            return $this->ci;
        } 
        function setnombres($nombres){
             $this->nombres = $nombres;
       
         }
         function getnombres(){
             return $this->nombres;
         }
         function setap_paterno($ap_paterno){
            $this->ap_paterno = $ap_paterno;
      
        }
        function getap_paterno(){
            return $this->ap_paterno;
        }
        function setap_materno($ap_materno){
            $this->ap_materno = $ap_materno;
      
        }
        function getap_materno(){
            return $this->ap_materno;
        }
        function setfecha_nacimiento($fecha_nacimiento){
            $this->fecha_nacimiento = $fecha_nacimiento;
      
        }
        function getfecha_nacimiento(){
            return $this->fecha_nacimiento;
        }
        function settelefono($ap_telefono){
            $this->telefono = $telefono;
      
        }
        function gettelefono(){
            return $this->telefono;
        }
        function setemail($email){
            $this->email = $email;
      
        }
        function getemail(){
            return $this->email;
        }
        function setdireccion($direccion){
            $this->direccion = $direccion;
      
        }
        function getdireccion(){
            return $this->direccion;
        }
        function setcargo($cargo){
            $this->cargo = $cargo;
      
        }
        function getcargo(){
            return $this->cargo;
        }
        function setcontrasena($contrasena){
            $this->contrasena = $contrasena;
      
        }
        function getcontrasena(){
            return $this->contrasena;
        }
        function setfecha_registro($fecha_registro){
            $this->fecha_registro = $fecha_registro;
      
        }
        function getfecha_registro(){
            return $this->fecha_registro;
        }
        function setsalario($salario){
            $this->salario = $salario;
      
        }
        function getsalario(){
            return $this->salario;
        }




        function obtUsuario(){
           // echo "Lista usuarios..";
            $c = new CnxPDO();
            $q = "SELECT idusuario, ci, nombres, ap_paterno, ap_materno, fecha_nacimiento, telefono, email, direccion, cargo, contrasena, fecha_registro, salario  FROM usuarios;";
            //echo $q;
            $consulta = $c->getCnx()->prepare($q);
            $consulta->execute();
            //var_dump("consulta",$resultado);
            $resultado = $consulta->fetchAll(PDO::FECTCH_obj);
            //var_dump("resultado",$resultado);
            echo json_encode($resulado);
        }
        function insUsuario(){
            echo "Inserta usuarios..";
        }
        function actUsuario(){
            echo "Actualiza usuarios..";
        }
        function actCampoUsuario(){
            echo "Actualiza un campo del usuario..";
        }
        function delUsuario(){
            echo "Elimina usuarios..";
        }
        function make(){

        }

   }

   $su = new Usuario();
?>