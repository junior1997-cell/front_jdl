<?php
  ob_start();
  if (strlen(session_id()) < 1) {
    session_start(); //Validamos si existe o no la sesión
  }

  if (!isset($_SESSION["nombre"])) {
    $retorno = ['status'=>'login', 'message'=>'Tu sesion a terminado pe, inicia nuevamente', 'data' => [] ];
    echo json_encode($retorno);  //Validamos el acceso solo a los usuarios logueados al sistema.
  } else {

    if ($_SESSION['otro_ingreso'] == 1) {

      require_once "../modelos/Comprobante.php";
      require_once "../modelos/Persona.php";

      $comprobante_m = new Comprobante($_SESSION['idusuario']);
      $persona       = new Persona($_SESSION['idusuario']);
            
      date_default_timezone_set('America/Lima');  $date_now = date("d-m-Y h.i.s A");
      $toltip = '<script> $(function () { $(\'[data-toggle="tooltip"]\').tooltip(); }); </script>';
      
      $idcomprobante   = isset($_POST["idcomprobante"]) ? limpiarCadena($_POST["idcomprobante"]) : "";      
      $idpersona        = isset($_POST["idpersona"]) ? limpiarCadena($_POST["idpersona"]) : "";  
      $fecha_i          = isset($_POST["fecha_i"]) ? limpiarCadena($_POST["fecha_i"]) : "";
      $forma_pago       = isset($_POST["forma_pago"]) ? limpiarCadena($_POST["forma_pago"]) : "";
      $tipo_comprobante = isset($_POST["tipo_comprobante"]) ? limpiarCadena($_POST["tipo_comprobante"]) : "";
      $nro_comprobante  = isset($_POST["nro_comprobante"]) ? limpiarCadena($_POST["nro_comprobante"]) : "";
      $subtotal         = isset($_POST["subtotal"]) ? limpiarCadena($_POST["subtotal"]) : "";
      $igv              = isset($_POST["igv"]) ? limpiarCadena($_POST["igv"]) : "";
      $val_igv          = isset($_POST["val_igv"])? limpiarCadena($_POST["val_igv"]):"";
      $tipo_gravada     = isset($_POST["tipo_gravada"])? limpiarCadena($_POST["tipo_gravada"]):"";  
      
      $precio_parcial   = isset($_POST["precio_parcial"]) ? limpiarCadena($_POST["precio_parcial"]) : "";
      $descripcion      = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";

      $ruc              = isset($_POST["num_documento"]) ? limpiarCadena($_POST["num_documento"]) : "";
      $razon_social     = isset($_POST["razon_social"]) ? limpiarCadena($_POST["razon_social"]) : "";
      $direccion        = isset($_POST["direccion"]) ? limpiarCadena($_POST["direccion"]) : "";

      $foto2 = isset($_POST["doc1"]) ? limpiarCadena($_POST["doc1"]) : "";

      // :::::::::::::::::::::::::::::::::::: D A T O S   P E R S O N A ::::::::::::::::::::::::::::::::::::::

      $idpersona	  	  = isset($_POST["idpersona"])? limpiarCadena($_POST["idpersona"]):"";
      $id_tipo_persona 	= isset($_POST["id_tipo_persona"])? limpiarCadena($_POST["id_tipo_persona"]):"";
      $nombre 		      = isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
      $tipo_documento 	= isset($_POST["tipo_documento"])? limpiarCadena($_POST["tipo_documento"]):"";
      $num_documento  	= isset($_POST["num_documento"])? limpiarCadena($_POST["num_documento"]):"";
      $direccion		    = isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
      $telefono		      = isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";     
      $email			      = isset($_POST["email"])? limpiarCadena($_POST["email"]):"";
      $banco            = isset($_POST["banco"])? $_POST["banco"] :"";
      $cta_bancaria_format  = isset($_POST["cta_bancaria"])?$_POST["cta_bancaria"]:"";
      $cta_bancaria     = isset($_POST["cta_bancaria"])?$_POST["cta_bancaria"]:"";
      $cci_format      	= isset($_POST["cci"])? $_POST["cci"]:"";
      $cci            	= isset($_POST["cci"])? $_POST["cci"]:"";
      $titular_cuenta		= isset($_POST["titular_cuenta"])? limpiarCadena($_POST["titular_cuenta"]):"";

      $nacimiento       = isset($_POST["nacimiento"])? limpiarCadena($_POST["nacimiento"]):"";
      $cargo_trabajador = isset($_POST["cargo_trabajador"])? limpiarCadena($_POST["cargo_trabajador"]):"";
      $sueldo_mensual   = isset($_POST["sueldo_mensual"])? limpiarCadena($_POST["sueldo_mensual"]):"";
      $sueldo_diario    = isset($_POST["sueldo_diario"])? limpiarCadena($_POST["sueldo_diario"]):"";
      $edad             = isset($_POST["edad"])? limpiarCadena($_POST["edad"]):"";
      
      $imagen1			    = isset($_POST["foto1"])? limpiarCadena($_POST["foto1"]):"";

      switch ($_GET["op"]) {
        case 'guardar_y_editar_comprobante':
          // Comprobante
          if (!file_exists($_FILES['doc1']['tmp_name']) || !is_uploaded_file($_FILES['doc1']['tmp_name'])) {
      
            $comprobante = $_POST["doc_old_1"];
      
            $flat_ficha1 = false;
      
          } else {
      
            $ext1 = explode(".", $_FILES["doc1"]["name"]);
      
            $flat_ficha1 = true;
      
            $comprobante = $date_now .' '.random_int(0, 20) . round(microtime(true)) . random_int(21, 41) . '.' . end($ext1);
      
            move_uploaded_file($_FILES["doc1"]["tmp_name"], "../dist/docs/comprobante/comprobante/" . $comprobante);
          }
      
          if (empty($idcomprobante)) {
            //var_dump($idproyecto,$idproveedor);
            $rspta = $comprobante_m->insertar($idpersona, $fecha_i, $forma_pago, $tipo_comprobante, $nro_comprobante, $subtotal, $igv, $val_igv, $tipo_gravada, $precio_parcial, $descripcion, $comprobante);
            
            echo json_encode($rspta,true);
      
          } else {
            //validamos si existe comprobante para eliminarlo
            if ($flat_ficha1 == true) {
      
              $datos_ficha1 = $comprobante_m->ficha_tec($idcomprobante);
      
              $ficha1_ant = $datos_ficha1['data']->fetch_object()->comprobante;
      
              if ($ficha1_ant != "") {
      
                unlink("../dist/docs/comprobante/comprobante/" . $ficha1_ant);
              }
            }
      
            $rspta = $comprobante_m->editar($idcomprobante,$idpersona, $fecha_i, $forma_pago, $tipo_comprobante, $nro_comprobante, $subtotal, $igv, $val_igv, $tipo_gravada, $precio_parcial, $descripcion, $comprobante);
            //var_dump($idcomprobante,$idproveedor);
            echo json_encode($rspta,true);
          }
        break;
      
        case 'desactivar':
      
          $rspta = $comprobante_m->desactivar($_GET['id_tabla']);
      
          echo json_encode($rspta,true);
      
        break;

        case 'eliminar':
      
          $rspta = $comprobante_m->eliminar($_GET['id_tabla']);
      
          echo json_encode($rspta,true);
      
        break;
      
        case 'mostrar':
      
          $rspta = $comprobante_m->mostrar($idcomprobante);
          //Codificar el resultado utilizando json
          echo json_encode($rspta,true);
      
        break;
      
        case 'verdatos':
      
          $rspta = $comprobante_m->mostrar($idcomprobante);
          //Codificar el resultado utilizando json
          echo json_encode($rspta,true);
      
        break;
      
        case 'tbla_principal':
          $rspta = $comprobante_m->tbla_principal();
          //Vamos a declarar un array
          $data = [];  $comprobante = '';   $cont = 1;

          if ($rspta['status'] == true) {
            while ($reg = $rspta['data']->fetch_object()) {

              empty($reg->comprobante)
                ? ($comprobante = '<div><center><a type="btn btn-danger" class=""><i class="fas fa-file-invoice-dollar fa-2x text-gray-50"></i></a></center></div>')
                : ($comprobante = '<div><center><a type="btn btn-danger" class=""  href="#" onclick="modal_comprobante(' . "'" . $reg->comprobante . "'" . ',' . "'" . $reg->tipo_comprobante . "'" . ',' . "'" .(empty($reg->numero_comprobante) ? " - " : $reg->numero_comprobante). "'" . ')"><i class="fas fa-file-invoice-dollar fa-2x"></i></a></center></div>');
              
              $data[] = [
                "0" => $cont++,
                "1" => '<button class="btn btn-warning btn-sm" onclick="mostrar(' . $reg->idcomprobante . ')"><i class="fas fa-pencil-alt"></i></button>' .
                    ' <button class="btn btn-danger  btn-sm" onclick="eliminar(' . $reg->idcomprobante . ',' . "'" . $reg->tipo_comprobante . "'" . ',' . "'" . (empty($reg->numero_comprobante) ? " - " : $reg->numero_comprobante). "'". ')"><i class="fas fa-skull-crossbones"></i> </button>'.
                    ' <button class="btn btn-info btn-sm" onclick="ver_datos(' . $reg->idcomprobante . ')" data-toggle="tooltip" data-original-title="Ver detalle"><i class="fa fa-eye"></i></button>',
                "2" =>'<div class="user-block">
                  <span class="username ml-0" ><p class="text-primary m-b-02rem" >' . ((empty($reg->nombres)) ? 'Sin Razón social' : $reg->nombres ) .'</p> </span>
                  <span class="description ml-0" >'. $reg->tipo_documento .': ' . (empty($reg->numero_documento) ? "Sin Ruc" : $reg->numero_documento) . '</span>         
                </div>',
                "3" => $reg->forma_de_pago,
                "4" =>'<div class="user-block">
                  <span class="username ml-0"> 
                  <p class="text-primary m-b-02rem" >' .  $reg->tipo_comprobante .   '</p> </span>
                  <span class="description ml-0" >N° ' . (empty($reg->numero_comprobante) ? " - " : $reg->numero_comprobante) . '</span>         
                </div>',
                "5" => $reg->fecha_ingreso,
                "6" =>$reg->precio_con_igv,
                "7" => '<textarea cols="30" rows="1" class="textarea_datatable" readonly="">' . $reg->descripcion . '</textarea>',
                "8" => $comprobante. $toltip,

                "9"=>$reg->nombres,
                "10"=>$reg->tipo_documento,
                "11"=>(empty($reg->numero_documento) ? "Sin Ruc" : $reg->numero_documento),
                "12"=>$reg->tipo_comprobante,
                "13"=>$reg->numero_comprobante,
                "14"=>$reg->precio_sin_igv,
                "15"=>$reg->precio_igv,
                "16"=>$reg->tipo_gravada,
              ];
            }
            $results = [
              "sEcho" => 1, //Información para el datatables
              "iTotalRecords" => count($data), //enviamos el total registros al datatable
              "iTotalDisplayRecords" => 1, //enviamos el total registros a visualizar
              "data" => $data,
            ];
            echo json_encode($results);
          } else {

            echo $rspta['code_error'] .' - '. $rspta['message'] .' '. $rspta['data'];
          }
        break;
      
        case 'total':
          $rspta = $comprobante_m->total();
          echo json_encode($rspta,true);
        break;
      
        case 'selecct_produc_o_provee':

          $rspta = $comprobante_m->selecct_produc_o_provee(); $cont = 1; $data = "";

          if ($rspta['status']) {
  
            foreach ($rspta['data'] as $key => $value) {  

                $data .= '<option value=' .$value['idpersona']. '>'.( !empty($value['nombres']) ?  $value['tipo'].' : '.$value['nombres'].' - ' : '') .$value['numero_documento'].'</option>';
    
            }
  
            $retorno = array(
              'status' => true, 
              'message' => 'Salió todo ok', 
              'data' => '<option value="vacio">Sin proveedor</option>'.$data, 
            );
    
            echo json_encode($retorno, true);
  
          } else {
  
            echo json_encode($rspta, true); 
          }

        break;

        case 'select_tipo_persona':
          $rspta = $comprobante_m->select_tipo_persona(); $cont = 1; $data = "";

          if ($rspta['status']) {
  
            foreach ($rspta['data'] as $key => $value) {  

                $data .= '<option value=' .$value['idtipo_persona']. '>'.( !empty($value['nombre']) ?  $value['nombre'] : '') .'</option>';
    
            }
  
            $retorno = array(
              'status' => true, 
              'message' => 'Salió todo ok', 
              'data' => $data, 
            );
    
            echo json_encode($retorno, true);
  
          } else {
  
            echo json_encode($rspta, true); 
          }
        break;

                
      // :::::::::::::::::::::::::: S E C C I O N   P R O V E E D O R  ::::::::::::::::::::::::::
      case 'guardarpersona':
    
        if (empty($idpersona)){

          // imgen de perfil
          if (!file_exists($_FILES['foto1']['tmp_name']) || !is_uploaded_file($_FILES['foto1']['tmp_name'])) {
						$imagen1=$_POST["foto1_actual"]; $flat_img1 = false;
					} else {
						$ext1 = explode(".", $_FILES["foto1"]["name"]); $flat_img1 = true;
            $imagen1 = $date_now .' '. random_int(0, 20) . round(microtime(true)) . random_int(21, 41) . '.' . end($ext1);
            move_uploaded_file($_FILES["foto1"]["tmp_name"], "../dist/docs/persona/perfil/" . $imagen1);						
					}

          $rspta=$persona->insertar($id_tipo_persona,$tipo_documento,$num_documento,$nombre,$email,$telefono,$banco,$cta_bancaria,$cci,
          $titular_cuenta,$direccion,$nacimiento,$cargo_trabajador,$sueldo_mensual,$sueldo_diario,$edad, $imagen1);
          echo json_encode($rspta, true);
          
        }else{
    
          echo "error";
        }
    
      break;

        case 'salir':
          //Limpiamos las variables de sesión
          session_unset();
          //Destruìmos la sesión
          session_destroy();
          //Redireccionamos al login
          header("Location: ../index.php");      
        break;

        default: 
          $rspta = ['status'=>'error_code', 'message'=>'Te has confundido en escribir en el <b>swich.</b>', 'data'=>[]]; echo json_encode($rspta, true); 
        break;
      }
      
    } else {
      $retorno = ['status'=>'nopermiso', 'message'=>'Tu sesion a terminado pe, inicia nuevamente', 'data' => [] ];
      echo json_encode($retorno);
    }
  }

  ob_end_flush();
?>
