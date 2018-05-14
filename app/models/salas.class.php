<?php
class Salas extends Validator{
    private $id = null;
    private $nombre = null;
    private $idestadosala = null;
    private $descripcion = null;
    private $costo = null;
    private $capacidad = null;
    
    //Métodos para sobrecarga de propiedades
    public function setId($value){
        if($this->validateId($value)){
            $this->id = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getId(){
			return $this->id;
    }
    
    public function setNombre($value){
			if($this->validateAlphanumeric($value, 1, 50)){
				$this->nombre = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getNombre(){
			return $this->nombre;
		}
    
    public function setIdestadosala($value){
		if($this->validateId($value)){
			$this->idestadosala = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdestadosala(){
		return $this->idestadosala;
    }

    public function setDescripcion($value){
		if($this->validateAlphanumeric($value, 1, 200)){
			$this->clave = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDescripcion(){
		return $this->descripcion;
		}
		
		public function setCosto($value){
			if($this->validateMoney($value,2)){
				$this->costo = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getCosto(){
			return $this->costo;
			}

			public function setCapacidad($value){
				if($this->validateNumeric($value,3)){
					$this->capacidad = $value;
					return true;
				}else{
					return false;
				}
			}
			public function getCapacidad(){
				return $this->capacidad;
				}
    
    //Metodos CRUD para cotegoria
		//Obtener categoria
		public function getSala(){
			$sql = "SELECT IdSala, NombreSala, IdEstadoSala, Descripcion, Costo, Capacidad FROM salas ORDER BY IdSala";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
	
    //Buscar categoria con parametros
    public function searchSala($value){
		$sql = "SELECT * FROM salas WHERE NombreSala LIKE ? OR Capacidad LIKE ? ORDER BY NombreSala";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createSala(){
		$sql = "INSERT INTO salas(IdSala, NombreSala, IdEstadoSala, Descripcion, Costo, Capacidad) VALUES(?, ?, ?, ?, ?, ?)";
		$params = array($this->id, $this->nombre, $this->idestadosala, $this->descripcion, $this->Costo, $this->Capacidad);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readSala(){
		$sql = "SELECT NombreSala, IdEstadoSala, Descripcion, Costo, Capacidad FROM salas WHERE IdSala = ?";
		$params = array($this->id);
		$sala = Database::getRow($sql, $params);
		if($sala){
			$this->nombre = $sala['NombreSala'];
            $this->idestadosala = $sala['IdEstadoSala'];
						$this->Descripcion = $sala['Descripcion'];
						$this->Costo = $sala['Costo'];
						$this->Capacidad = $sala['Capacidad'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateSala(){
		$sql = "UPDATE salas SET NombreSala = ?, IdEstadoSala = ?, Descripcion = ?, Costo = ?, Capacidad = ? WHERE IdSala = ?";
		$params = array($this->nombre, $this->idestadosala, $this->descricion, $this->costo, $this->Capacidad, $this->Id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteSala(){
		$sql = "DELETE FROM salas WHERE IdSala = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>