<?php

   class Socios_negocio extends Conectar{

         public function get_socios_negocio(){
           $conectar= parent::Conexion();
           parent::set_names();
           $sql="SELECT * FROM ma_socios_negocio";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
         }


         public function get_socio_negocio($id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM ma_socios_negocio WHERE id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
         }

         public function insert_socio_negocio($NOMBRE,$RAZONSOCIAL,$DIRECCION,$TIPOSOCIO,$CONTACTO,$EMAIL,$FECHACREADO,$ESTADO,$TELEFONO){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO ma_socios_negocio(ID,NOMBRE,RAZON_SOCIAL,DIRECCION,TIPO_SOCIO,CONTACTO,EMAIL,FECHA_CREADO,ESTADO,TELEFONO)
            VALUES (Null,?,?,?,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $NOMBRE);
            $sql->bindValue(2, $RAZONSOCIAL);
            $sql->bindValue(3, $DIRECCION);
            $sql->bindValue(4, $TIPOSOCIO);
            $sql->bindValue(5, $CONTACTO);
            $sql->bindValue(6, $EMAIL);
            $sql->bindValue(7, $FECHACREADO);
            $sql->bindValue(8, $ESTADO);
            $sql->bindValue(9, $TELEFONO);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
         }

         public function delete_socio_negocio($id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="DELETE FROM ma_socios_negocio WHERE  id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
         }

         public function update_socio_negocio($ID,$NOMBRE,$RAZONSOCIAL,$DIRECCION,$TIPOSOCIO,$CONTACTO,$EMAIL,$FECHACREADO,$ESTADO,$TELEFONO){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="UPDATE ma_socios_negocio SET NOMBRE=?,RAZON_SOCIAL=?,DIRECCION=?,TIPO_SOCIO=?,CONTACTO=?,EMAIL=?,FECHA_CREADO=?,ESTADO=?,TELEFONO=?
            WHERE id=?";
             $sql=$conectar->prepare($sql);
             $sql->bindValue(1, $NOMBRE);
             $sql->bindValue(2, $RAZONSOCIAL);
             $sql->bindValue(3, $DIRECCION);
             $sql->bindValue(4, $TIPOSOCIO);
             $sql->bindValue(5, $CONTACTO);
             $sql->bindValue(6, $EMAIL);
             $sql->bindValue(7, $FECHACREADO);
             $sql->bindValue(8, $ESTADO);
             $sql->bindValue(9, $TELEFONO);
             $sql->bindValue(10, $ID);
             $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
           }
    
    }

?>