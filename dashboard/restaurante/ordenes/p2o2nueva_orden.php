<?php
require_once("../../../app/views/dashboard/panel/panel.class.php");
Page::templateHeader("nueva ordenes");
require_once("../../../app/controllers/dashboard/restaurante/ordenes/p2o2nueva_orden_controller.php");
Page::templateFooter();
?>