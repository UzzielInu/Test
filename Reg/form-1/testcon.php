<?php 

	include_once("Interface.php");
	//:: se utiliza para acceder a miembros estaticos
	//-> se utiliza para acceder a miembros no estaticos
	class ConexionGenerica implements Inter{

		private $servidor=IConexionInfo::HOST;
		private $db=IConexionInfo::DB;
		private $usuario=IConexionInfo::USUARIO;
		private $password=IConexionInfo::PASSWORD;
		private $conexion;
		public function conecta(){
			$this->conexion=mysqli_connect($this->servidor,$this->usuario,$this->password,$this->db);
			if ($this->conexion) {
				# code...
				//echo "conexión exitosa";
			}elseif (mysqli_connect_error($this->conexion)) {
				# code...
				echo "error al conectarse".mysqli_connect_error();

			}//fin if
			return $this->conexion;
		}//fin conecta
	}//fin conexiongenerica

 ?>