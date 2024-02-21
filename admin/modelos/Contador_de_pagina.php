<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion_v2.php";

Class Contador_de_pagina
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

  /* ══════════════════════════════════════ C O N T A D O R   D E  P A G I N A  ══════════════════════════════════════ */

  public function contador_de_pagina($pagina, $nombre_day, $nombre_month, $nombre_year) {

    date_default_timezone_set('America/Lima');
    $idvisitas_pag = ""; $vista =""; $ip =""; $cant = ""; $fecha_registro = ""; $nueva_fecha = ""; $nueva_Fecha ="";    

    $fecha        = date("Y-m-d"); 
    $facha_actual = date("Y-m-d H:i:s");
    $ipaddress    = '';

    if (getenv('HTTP_CLIENT_IP')){
      $ipaddress = getenv('HTTP_CLIENT_IP');
    }else if(getenv('HTTP_X_FORWARDED_FOR')){
      $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    }else if(getenv('HTTP_X_FORWARDED')){
      $ipaddress = getenv('HTTP_X_FORWARDED');
    }else if(getenv('HTTP_FORWARDED_FOR')){
      $ipaddress = getenv('HTTP_FORWARDED_FOR');
    }else if(getenv('HTTP_FORWARDED')){
      $ipaddress = getenv('HTTP_FORWARDED');
    }else if(getenv('REMOTE_ADDR')){
      $ipaddress = getenv('REMOTE_ADDR');
    }else{
      $ipaddress = 'UNKNOWN';
    }
    
    $sql_1 = "SELECT * FROM visitas_pag WHERE ip_maquina_visita='$ipaddress' AND nombre_vista='$pagina' ORDER BY idvisitas_pag DESC LIMIT 1;";
    $ultima_visitas = ejecutarConsultaSimpleFila($sql_1);  if ($ultima_visitas['status'] == false) { return $ultima_visitas; }

    if(!empty($ultima_visitas['data'])) {

      $idvisitas_pag  = $ultima_visitas['data']['idvisitas_pag'];
      $vista          = isset($ultima_visitas['data']['nombre_vista']) ? limpiarCadena($ultima_visitas['data']['nombre_vista']):"";
      $ip             = $ultima_visitas['data']['ip_maquina_visita'];
      $cant           = $ultima_visitas['data']['cantidad'];
      $fecha_registro = $ultima_visitas['data']['created_at'];

      $nueva_fecha    = strtotime($fecha_registro."+ 1 hour");
      $nueva_Fecha    = date("Y-m-d H:i:s",$nueva_fecha);

      if ($facha_actual >= $nueva_Fecha) {         
        $sql_2="INSERT INTO visitas_pag(nombre_vista, ip_maquina_visita, cantidad, fecha, nombre_day, nombre_month, nombre_year) VALUES 
        ('$pagina', '$ipaddress', 1, '$fecha', '$nombre_day', '$nombre_month', '$nombre_year')";
        return ejecutarConsulta($sql_2);
      }else{       
        $nueva_cant= $cant+1;
        $sql_3 ="UPDATE visitas_pag SET nombre_vista='$vista',ip_maquina_visita='$ip',cantidad='$nueva_cant',fecha='$fecha'
        WHERE idvisitas_pag='$idvisitas_pag';";
        return ejecutarConsulta($sql_3);
      }
    }else{
      $sql_2="INSERT INTO visitas_pag(nombre_vista, ip_maquina_visita, cantidad, fecha, nombre_day, nombre_month, nombre_year) VALUES 
      ('$pagina', '$ipaddress', 1, '$fecha', '$nombre_day', '$nombre_month', '$nombre_year')";
      return ejecutarConsulta($sql_2);        
    }
  }
}