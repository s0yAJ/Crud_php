<?php

class Base{

    static $instance = null;
    private $cone = null;
    
    public static function Eliminar($id){
        $sql = "DELETE FROM integrante WHERE ID = ?";

        $result = self::Aplicar()->prepare($sql);
        $result->bind_param('i', $id);
        $result->execute();
    }

    public static function VerPorId($id){
        $sql = "SELECT * FROM integrante WHERE ID = (?)";

        $result = self::Aplicar()->prepare($sql);
        $result->bind_param('i', $id);
        $result->execute();
        if(!$result){
            return false;
        }
        $info = $result->get_result();
        $fila = $info->fetch_object();
        return new Integrante($fila->ID,$fila->Nombre,$fila->Apellido,$fila->Email,$fila->Telefono,$fila->Skill,$fila->Language);
    }

    public static function Ver(){
        $sql = "SELECT * FROM integrante";

        $result = self::Aplicar()->query($sql);

        try{
            while($granulado = $result->fetch_object()){
                $lista[] = new Integrante($granulado->ID,$granulado->Nombre,$granulado->Apellido,$granulado->Email,$granulado->Telefono,$granulado->Skill,$granulado->Language);
            }
            return $lista;
        }catch(Exception $e){
            return $e;
        }
    }

    public static function Agregar($Someone){

        if(get_class($Someone) == 'Integrante'){
            if($Someone->Id > 0){
                $sql = "UPDATE integrante SET Nombre = ?, Apellido = ?, Email = ?, Telefono = ?, Language = ?, Skill = ? WHERE ID = ?";

                $result = self::Aplicar()->prepare($sql);

                $result->bind_param('ssssssi', $Someone->Name, $Someone->LastName, $Someone->Email, $Someone->Phone, $Someone->Language, $Someone->Skill, $Someone->Id);

                $result->execute();
            }else{
                $sql = "INSERT INTO integrante (Nombre, Apellido, Email, Telefono, Language, Skill) VALUES (?,?,?,?,?,?)";
        
                $result = self::Aplicar()->prepare($sql);
        
                $result->bind_param('ssssss', $Someone->Name, $Someone->LastName, $Someone->Email, $Someone->Phone, $Someone->Language, $Someone->Skill);
        
                $result->execute();
            }
        }

        if($result->error){
            throw new Exception("There're something wrong ". $result->error);
        } 
    }

    function __construct()
    {
        $this->cone = new mysqli(Host,User,Pass,ServerName);
    }

    function __destruct()
    {
        $this->cone->close();
    }

    public static function Aplicar(){
        if(!self::$instance){
            self::$instance = new Base();
        }
        return self::$instance->cone;
    }
}