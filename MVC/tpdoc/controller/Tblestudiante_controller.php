<?php
    require_once 'model/Tblestudiante__model.php';

    class Tblestudiante_controller{
        private  $model_estudiante;

        public function __construct(){
            $this->model_estudiante = new Tblestudiante_model();

        }

        public function index(){
            $consulta = $this->model_estudiante->consultar("SELECT * FROM tblestudiante");
            require_once 'view/Tblestudiante_view.php';
        }

        public function modificar(){
            
            $tipodoc = $_REQUEST['tipodoc'];
            $consulta = $this->model_estudiante->consultarPorId("SELECT * FROM tblestudiante WHERE tipodoc=$tipodoc");
            require_once 'view/Tblestudiante_modificar.php';
        }

        public function guardarCambiosEstudiante(){
            $dato['tipodoc'] = $_POST["txttipodoc"];
            $dato['numero'] = $_POST["txtnumero"];
            $dato['nombre'] = $_POST["txtnombre"];
            $dato['f_nacimiento'] = $_POST["txtf_nacimiento"];
            $this->model_estudiante->actualizarEstudiante($dato);
            $this->index();
        }

        public function eliminar(){
            $tipodoc = $_REQUEST['tipodoc'];
            $this->model_estudiante->eliminarEstudiante($tipodoc);
            $this->index();
        }

        public function guardar(){
            $dato['numero'] = $_POST["txtnumero"];
            $dato['nombre'] = $_POST["txtnombre"];
            $dato['f_nacimiento'] = $_POST["txtf_nacimiento"];
            $this->model_estudiante->insertEstudiante($dato);
            $this->index();
        }
    }
?>