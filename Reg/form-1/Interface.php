<?php 
	//Interface de conexión
	Interface Inter{
		const HOST="localhost";
		const USUARIO="root";
		const PASSWORD="12345";
		const DB="servicio";
		public function conecta();
	}
 ?>