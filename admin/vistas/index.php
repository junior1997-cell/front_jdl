<?php  

    $ruta = ""; $file_go = isset($_GET["file"]) ? $_GET["file"] : "";

    function enrutamiento($tipo, $file) {
        if ($tipo == 'nube') {
            $link_host = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/admin/vistas/login.html?file='.$file;
        }else{
            if ($tipo == 'local') {
                $link_host = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']."/front_jdl/admin/vistas/login.html?file=".$file;
            }            
        }
        return $link_host;
    }

    if ($_SERVER['HTTP_HOST'] == "localhost" || is_numeric(floatval($_SERVER['SERVER_NAME'])) == true ) {
        $ruta = enrutamiento('local', $file_go);
    } else {
        $ruta = enrutamiento('nube', $file_go);
    }  

    header("Location: $ruta");
?>