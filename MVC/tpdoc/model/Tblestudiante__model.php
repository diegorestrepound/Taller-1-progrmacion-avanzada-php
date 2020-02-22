<?php
    class Tblestudiante_model{

        private $bd;
        private $tblestudiante;

        public function __construct(){
            $this->bd = Conexion::getConexion();
            $this->tblestudiante = array();
        }

        public function consultar($accion_sql){
            $consulta = $this->bd->query($accion_sql);
            while($fila = $consulta->fetch_assoc()){
                $this->tblestudiante[] = $fila;
            }
            return $this->tblestudiante; 
        }

        public function consultarPorId($accion_sql){
            $consulta = $this->bd->query($accion_sql);
            $fila = $consulta->fetch_assoc();
            $this->tblestudiante[] = $fila;
            
            return $this->tblestudiante; 
        }

        public function actualizarEstudiante($dato){
            $tipodoc = $dato['tipodoc'];
            $numero = $dato['numero'];
            $nombre = $dato['nombre'];
            $f_nacimiento = $dato['f_nacimiento'];

            $consulta = "UPDATE tblestudiante SET numero = '$numero' ,nombre='$nombre', f_nacimiento='$f_nacimiento' WHERE tipodoc = $tipodoc";
            mysqli_query($this->bd, $consulta) or die ("Error al actualizar los datos.");
        }

        public function eliminarEstudiante($tipodoc){
            $consulta = "DELETE FROM tblestudiante WHERE tipodoc=$tipodoc";
            mysqli_query($this->bd, $consulta) or die ("Error al eliminar los datos.");
        }

        public function insertEstudiante($dato){
            $numero = $dato['numero'];
            $nombre = $dato['nombre'];
            $f_nacimiento = $dato['f_nacimiento'];

            $consulta = "INSERT INTO tblestudiante ( numero, nombre, f_nacimiento) VALUES ( '$numero', '$nombre', '$f_nacimiento')";
            mysqli_query($this->bd, $consulta) or die ("Error al agregar los datos.");
        }

    }
?>