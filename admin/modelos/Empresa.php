<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion_v2.php";

Class Empresa
{
  //Implementamos nuestro variable global
  public $id_usr_sesion;

	//Implementamos nuestro constructor
	public function __construct( $id_usr_sesion = 0 )
	{
    $this->id_usr_sesion = $id_usr_sesion;
	}

	//Implementamos un método para insertar registros
	public function insertar( $nombre_empresa, $tipo_documento, $numero_documento, $direccion, $departamento, $provincia, $distrito,
	$ubigeo, $pais , $telefono, $correo, $nombre_impuesto, $monto_impuesto, $moneda, $simbolo,
	$usuario_sol, $clave_sol, $estado_certificado, $clave_certificado,$img_perfil,$certificado_digital)	{

		$sql="INSERT INTO datos_empresa( nombre_empresa, tipo_documento, numero_documento, direccion, departamento, provincia, distrito, ubigeo, pais, telefono, correo, 
		logo, nombre_impuesto, monto_impuesto, moneda, simbolo, diasVencer, validezcoti, usuario_sol, clave_sol, estado_certificado, ruta_certificado, clave_certificado) 
		VALUES ('$nombre_empresa','$tipo_documento','$numero_documento','$direccion','$departamento','$provincia','$distrito','$ubigeo','$pais','$telefono','$correo',
		'$img_perfil','$nombre_impuesto','$monto_impuesto','$moneda','$simbolo','$usuario_sol','$clave_sol','$estado_certificado','$certificado_digital','$clave_certificado')";
		$intertar =  ejecutarConsulta_retornarID($sql); if ($intertar['status'] == false) {  return $intertar; } 
		$id = $intertar['data'];

		//add registro en nuestra bitacora
		$sql_d = "$nombre_empresa, $tipo_documento, $numero_documento, $direccion, $departamento, $provincia, $distrito,
		$ubigeo, $pais , $telefono, $correo, $nombre_impuesto, $monto_impuesto, $moneda, $simbolo,
		$usuario_sol, $clave_sol, $estado_certificado, $clave_certificado,$img_perfil,$certificado_digital";
		$sql_bit = "INSERT INTO bitacora_bd( idcodigo, nombre_tabla, id_tabla, sql_d, id_user) VALUES (5,'datos_empresa','$id','$sql_d', '$this->id_usr_sesion')";
		$bitacora = ejecutarConsulta($sql_bit); if ( $bitacora['status'] == false) {return $bitacora; } 	    
		
		return $intertar;
	}

	//Implementamos un método para editar registros
	public function editar($iddatos_empresa, $nombre_empresa, $tipo_documento, $numero_documento, $direccion, $departamento, $provincia, $distrito,
	$ubigeo, $pais , $telefono, $correo, $nombre_impuesto, $monto_impuesto, $moneda, $simbolo,
	$usuario_sol, $clave_sol, $estado_certificado, $clave_certificado,$img_perfil,$certificado_digital)
	{
		$sql_1="UPDATE datos_empresa SET nombre_empresa='$nombre_empresa',tipo_documento='[value-3]',numero_documento='[value-4]',
		direccion='[value-5]',departamento='[value-6]',provincia='[value-7]',distrito='[value-8]',ubigeo='[value-9]',pais='[value-10]',telefono='[value-11]',
		correo='[value-12]',logo='[value-13]',nombre_impuesto='[value-14]',monto_impuesto='[value-15]',moneda='[value-16]',simbolo='[value-17]',
		diasVencer='[value-18]',validezcoti='[value-19]',usuario_sol='[value-20]',clave_sol='[value-21]',estado_certificado='[value-22]',ruta_certificado='[value-23]',
		clave_certificado='[value-24]' WHERE iddatos_empresa='$iddatos_empresa'";
		$editar =  ejecutarConsulta($sql_1); if ( $editar['status'] == false) {return $editar; } 
	
		//add registro en nuestra bitacora
		$sql_d ="$iddatos_empresa, $nombre_empresa, $tipo_documento, $numero_documento, $direccion, $departamento, $provincia, $distrito,
		$ubigeo, $pais , $telefono, $correo, $nombre_impuesto, $monto_impuesto, $moneda, $simbolo,
		$usuario_sol, $clave_sol, $estado_certificado, $clave_certificado,$img_perfil,$certificado_digital";
		$sql_bit = "INSERT INTO bitacora_bd( idcodigo, nombre_tabla, id_tabla, sql_d, id_user) VALUES (6, 'datos_empresa','$iddatos_empresa', '$sql_d', '$this->id_usr_sesion')";
		$bitacora = ejecutarConsulta($sql_bit); if ( $bitacora['status'] == false) {return $bitacora; }  	
	
		return $editar;
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id)	{		
		$sql="SELECT * FROM datos_empresa WHERE iddatos_empresa='$id'";
		return ejecutarConsultaSimpleFila($sql); 
	}

	//Implementar un método para listar los registros
	public function tbla_empresa()
	{
		$sql="SELECT * FROM datos_empresa WHERE estado=1  AND estado_delete=1  ORDER BY nombre_empresa ASC";
		return ejecutarConsulta($sql);			
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function obtener_perfil_certificado($id)	{		
		$sql="SELECT logo, ruta_certificado FROM datos_empresa WHERE iddatos_empresa='$id'";
		return ejecutarConsulta($sql); 
	}

	
}
?>