<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("habitaciones");
require_once("../../../app/controllers/dashboard/hotel/registros/habitaciones_controller.php");
Page::templateFooter();
?>