<?php
//crear la configuracion de la base de datos
class database{
	public static function conectar(){
		$conexion = new mysqli("localhost","root","","bdNombres");
		$conexion->query("SET NAME 'utf8");
		return $conexion;


	}
}

?>