<?php 
    require_once('modelo/informacion_model.php');

    class informacion_controller{

        private $model_e;
        private $model_p;

        function __construct(){
            $this->model_e=new informacion_model();
        }

        function index(){
            $query =$this->model_e->get();

            include_once('vistas/header.php');
            include_once('vistas/index.php');
            include_once('vistas/footer.php');
        }
        function informacion(){
            $data=NULL;
            if(isset($_REQUEST['id'])){
                $data=$this->model_e->get_id($_REQUEST['id']);    
            }
            $query=$this->model_e->get();
            include_once('vistas/header.php');
            include_once('vistas/informacion.php');
            include_once('vistas/footer.php');
        }

        function get_datosE(){

            
            $data['id']=$_REQUEST['id'];
            $data['nombre']=$_REQUEST['nombre'];
            $data['descripcion']=$_REQUEST['descripcion'];
            $data['ubicacion']=$_REQUEST['ubicacion'];
            $data['costo']=$_REQUEST['costo'];
            $data['fecha']=$_REQUEST['fecha'];

            if ($_REQUEST['id']=="") {
                $this->model_e->create($data);
            }
            
            if($_REQUEST['id']!=""){
                $date=$_REQUEST['id'];
                $this->model_e->update($data,$date);
            }
            
            header("Location:index.php");

        }

        function confirmarDelete(){

            $data=NULL;

            if ($_REQUEST['id']!=0) {
               $data=$this->model_e->get_id($_REQUEST['id']);
            }

            if ($_REQUEST['id']==0) {
                $date['id']=$_REQUEST['id'];
                $this->model_e->delete($date['id']);
                header("Location:index.php");
            }

            include_once('vistas/header.php');
            include_once('vistas/confirm.php');
            include_once('vistas/footer.php');
            


        }


    }
?>