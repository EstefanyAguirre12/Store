<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("habitaciones");
require_once("../../../app/controllers/dashboard/hotel/registros/tipo/index_controller.php");
require_once("../../graficosyreportes/tipohabitacion.php");
Page::templateFooter();
?>