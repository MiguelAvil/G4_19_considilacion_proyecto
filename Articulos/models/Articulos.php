<?php
    class Articulos extends Conectar{
        //Obtener todos los Articulos
        public function get_articulos(){ 
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM ma_articulos ";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        //Obtener un Articulo
        public function get_articulo($id){ 
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM ma_articulos WHERE  id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        //Insertar Articulos
        public function insert_articulos($descripcion,$unidad,$costo,$precio,$aplica_isv,$porcentaje_isv,$estado,$id_socio){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO ma_articulos(id,descripcion,unidad,costo,precio,aplica_isv,porcentaje_isv,estado,id_socio )
            VALUES (NULL,?,?,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $descripcion);
            $sql->bindValue(2, $unidad);
            $sql->bindValue(3, $costo);
            $sql->bindValue(4, $precio);
            $sql->bindValue(5, $aplica_isv);
            $sql->bindValue(6, $porcentaje_isv);
            $sql->bindValue(7, $estado);
            $sql->bindValue(8, $id_socio);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        //Eliminar Articulos
        public function delete_articulos($id){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="DELETE FROM ma_articulos WHERE  id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        //Actualizar Articulos
        public function update_articulos($id,$descripcion,$unidad,$costo,$precio,$aplica_isv,$porcentaje_isv,$estado,$id_socio){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE ma_articulos SET descripcion = ?, unidad= ?, costo= ?, precio= ?, aplica_isv= ?, porcentaje_isv= ?, estado= ? ,id_socio  = ? WHERE id = ?;";
            $sql=$conectar->prepare($sql);            
            $sql->bindValue(1, $descripcion);
            $sql->bindValue(2, $unidad);
            $sql->bindValue(3, $costo);
            $sql->bindValue(4, $precio);
            $sql->bindValue(5, $aplica_isv);
            $sql->bindValue(6, $porcentaje_isv);
            $sql->bindValue(7, $estado);
            $sql->bindValue(8, $id_socio);
            $sql->bindValue(9, $id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }


    }
?>