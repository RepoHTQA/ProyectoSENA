<?php

class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar datos en la BD
        try{
            $query = $this->db->connect()->prepare('INSERT INTO categorias (cateId, cateNomb, cateFech, cateInact) VALUES(:cateId, :cateNomb, :cateFech, :cateInact)');
            $query->execute(['cateId' => $datos['cateId'], 'cateNomb' => $datos['cateNomb'], 'cateFech' => $datos['cateFech'], 'cateInact' => $datos['cateInact']]);
            return true;
        }catch(PDOException $e){
            
            return false;
        }
        
    }
}

?>