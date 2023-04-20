<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion_v2.php";

class Comprobante
{
  //Implementamos nuestro constructor
  public function __construct()
  {
  }
  //$idcomprobante,$idproyecto,$fecha_viaje,$tipo_viajero,$tipo_ruta,$cantidad,$precio_unitario,$precio_parcial,$ruta,$descripcion,$foto2
  //Implementamos un método para insertar registros
  public function insertar($idpersona, $fecha_i, $forma_pago, $tipo_comprobante, $nro_comprobante, $subtotal, $igv, $val_igv, $tipo_gravada, $precio_parcial, $descripcion, $comprobante)
  {

    $sql = "INSERT INTO comprobante( idpersona, fecha_ingreso, tipo_comprobante, numero_comprobante, forma_de_pago, precio_sin_igv, precio_igv, precio_con_igv,val_igv, tipo_gravada, descripcion, comprobante) 
    VALUES ('$idpersona', '$fecha_i', '$tipo_comprobante', '$nro_comprobante', '$forma_pago', '$subtotal', '$igv', '$precio_parcial',$val_igv, '$tipo_gravada', '$descripcion', '$comprobante')";
    return ejecutarConsulta($sql);

  }

  //Implementamos un método para editar registros
  public function editar($idcomprobante,$idpersona, $fecha_i, $forma_pago, $tipo_comprobante, $nro_comprobante, $subtotal, $igv, $val_igv, $tipo_gravada, $precio_parcial, $descripcion,$comprobante)
  {

    $sql = "UPDATE comprobante SET
    idpersona='$idpersona',
    fecha_ingreso='$fecha_i',
    tipo_comprobante='$tipo_comprobante',
    numero_comprobante='$nro_comprobante',
    forma_de_pago='$forma_pago',
    precio_sin_igv='$subtotal',
    precio_igv='$igv',
    precio_con_igv='$precio_parcial',
    val_igv='$val_igv',
    tipo_gravada='$tipo_gravada',
    descripcion='$descripcion',
    comprobante='$comprobante'

		WHERE idcomprobante='$idcomprobante'";
    return ejecutarConsulta($sql);
  }

  //Implementamos un método para desactivar categorías
  public function desactivar($idcomprobante) {
    $sql = "UPDATE comprobante SET estado='0' WHERE idcomprobante ='$idcomprobante'";
    return ejecutarConsulta($sql);
  }

  //Implementamos un método para desactivar categorías
  public function eliminar($idcomprobante) {
    $sql = "UPDATE comprobante SET estado_delete='0' WHERE idcomprobante ='$idcomprobante'";
    return ejecutarConsulta($sql);
  }

  //Implementar un método para mostrar los datos de un registro a modificar
  public function mostrar($idcomprobante) {
    $sql = "SELECT c.idcomprobante, c.idpersona, c.fecha_ingreso, c.tipo_comprobante, c.numero_comprobante, c.forma_de_pago, c.precio_sin_igv, 
    c.precio_igv, c.precio_con_igv,c.val_igv, c.tipo_gravada, c.descripcion, c.comprobante, p.nombres,p.numero_documento,p.tipo_documento, p.direccion
    FROM comprobante as c, persona as p 
    WHERE c.idpersona=p.idpersona AND c.idcomprobante ='$idcomprobante'";
    return ejecutarConsultaSimpleFila($sql);
  }

  //Implementar un método para listar los registros
  public function tbla_principal() {
    $sql = "SELECT c.idcomprobante, c.idpersona, c.fecha_ingreso, c.tipo_comprobante, c.numero_comprobante, c.forma_de_pago, c.precio_sin_igv, 
    c.precio_igv, c.precio_con_igv, c.tipo_gravada, c.descripcion, c.comprobante, p.nombres,p.numero_documento,p.tipo_documento, p.direccion
    FROM comprobante as c, persona as p 
    WHERE c.estado=1 AND c.estado_delete=1 AND c.idpersona=p.idpersona";
    return ejecutarConsulta($sql);

  }

  //total
  public function total() {
    $sql = "SELECT SUM(precio_con_igv) as precio_parcial FROM comprobante WHERE estado='1' AND estado_delete='1'";
    return ejecutarConsultaSimpleFila($sql);
  }

  //Seleccionar un comprobante
  public function ficha_tec($idcomprobante) {
    $sql = "SELECT comprobante FROM comprobante WHERE idcomprobante='$idcomprobante'";
    return ejecutarConsulta($sql);
  }

  //metodos para registar una persona
  public function insertar_persona($id_tipo_persona, $nombre, $tipo_documento, $num_documento, $direccion, $telefono, $banco, $cta_bancaria, $cci, $titular_cuenta)
  {
    $sql="INSERT INTO persona (idtipo_persona, nombres, tipo_documento, numero_documento, direccion,celular,idbancos, cuenta_bancaria, cci, titular_cuenta)
    VALUES ('$id_tipo_persona', '$nombre', '$tipo_documento', '$num_documento', '$direccion', '$telefono', '$banco', '$cta_bancaria', '$cci', '$titular_cuenta');";
    return ejecutarConsulta_retornarID($sql);
  }

  public function selecct_produc_o_provee()
  {
    $sql = "SELECT p.idpersona, p.idtipo_persona, p.nombres, p.numero_documento, tp.nombre as tipo FROM persona as p, tipo_persona as tp 
    WHERE p.idtipo_persona = tp.idtipo_persona AND p.idtipo_persona BETWEEN '2' and '3'  AND p.estado_delete =1 AND p.estado=1;";
    return ejecutarConsultaArray($sql);
  }

  public function select_tipo_persona()
  {
    $sql="SELECT * FROM tipo_persona WHERE idtipo_persona BETWEEN 2 AND 3;";
    return ejecutarConsulta($sql);
  }

}

?>
