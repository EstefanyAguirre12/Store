<?php
require_once("../../../app/models/pedidohabitacion.class.php");

try{
	 //Lista Habitaciones
    $hab = new Pedidohabitacion;
    $habitaciones = $hab->getHabitacion();
    if($habitaciones){

    }else{
        Page::showMessage(2, "Listado de habitaciones no disponible", null );
    }
    


}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/hotel/servicios/h_servicios_view.php");
?>
