<?php
require_once("../../../app/models/empleado.class.php");
try{
	 //Insertar
	$dato = new Empleado;
	if(isset($_POST['guardar'])){
		$_POST = $dato->validateForm($_POST);
		if($dato->setNombre($_POST['nom'])){
			if($dato->setApellido($_POST['ap'])){
				if($dato->setDui($_POST['dui'])){
					if($dato->setTelefono($_POST['tel'])){
						if($dato->setDireccion($_POST['dir'])){
							if($dato->setFoto($_POST['fot'])){
								if($dato->setCargo($_POST['car'])){
									if($dato->setGenero($_POST['gen'])){
										if($dato->createEmpleado()){
											Page::showMessage(1, "Se ha insertado correctamente", "indexempleado.php");
										}else{
											throw new Exception(Database::getException());
										}
									}else{
										throw new Exception("Tipo incorrecto", null);
									}
								}else{
									throw new Exception("Tipo incorrecto", null);
								}
							}else{
								throw new Exception("Tipo incorrecto", null);
							}
						}else{
							throw new Exception("Tipo incorrecto", null);
						}
					}else{
						throw new Exception("Tipo incorrecto", null);
					}
				}else{
					throw new Exception("Tipo incorrecto", null);
				}
			}else{
				throw new Exception("Tipo incorrecto", null);
			}
		}else{
			throw new Exception("Tipo incorrecto", null);
		}
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../../app/views/dashboard/registros/mantenimientos/empleados/agregar_view.php");
?>