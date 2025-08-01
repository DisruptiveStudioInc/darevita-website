<?php

//-------------------------------------------//
// FUNCIÓN PARA DETECTAR PAÍS POR IP
//-------------------------------------------//
function obtenerPaisPorIP() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $json = @file_get_contents("http://ipinfo.io/{$ip}/json");
    if ($json) {
        $datos = json_decode($json, true);
        return isset($datos['country']) ? $datos['country'] : null; // ej. "MX", "US"
    }
    return null;
}

//-------------------------------------------//
// DETECCIÓN DE REGIÓN Y ASIGNACIÓN DE LINK
//-------------------------------------------//
if (!isset($_SESSION["pais"])) {
    $_SESSION["pais"] = obtenerPaisPorIP();
}

$pais = $_SESSION["pais"];

switch ($pais) {
    case 'MX':
    $link_regional = 'https://mx.darevita.com';
    break;
    default:
    $link_regional = 'https://us.darevita.com';
    break;
}

//-------------------------------------------//
// OBTENER PÁGINA ACTUAL Y PARÁMETROS
//-------------------------------------------//


$Actual_Page = !empty($_GET['p']) ? $_GET['p'] : '';
$Actual_Page_Lan = $Actual_Page ? '&p=' . $Actual_Page : '';
$Client_Page_Id = (empty($_GET['id'])) ? '' : '&id=' . $_GET['id'];
$Hide = ($Actual_Page === 'home' || $Actual_Page === '') ? '' : 'none';


    //-------------------------//
    // CLIENT
    //-------------------------//

$Company_Name  = "Darevita";

    //-------------------------//
    // META
    //-------------------------//

$Description_Site  = "";
$Keywords_Site     = $Company_Name.",";

    //-------------------------//
    // GENERAL
    //-------------------------//

$Host_Site      = $_SERVER["HTTP_HOST"];
$Lang           = "es";
$Footer_Rights  = $Company_Name."© ".date("Y").". All rights reserved";

    //-------------------------//
    // MENU
    //-------------------------//

$Menu = array(
    array('#home','active',$Menu_01),
    array('#inside','',$Menu_02),
    array('','',$Menu_03),
    array('','', $Menu_04)
);

    //-------------------------//
    // SUBMENU
    //-------------------------//

$Sub = array(
    array('Treo', array(
        array('revive', 'Revive','revive',$Products_title_03),
        array('revive', 'Rejuvenate','rejuvenate',$Products_title_02),
        array('revive', 'Restore','restore',$Products_title_01)
    ))
);
$Sub_reg = array(
    array('usdev.darevita.com','USA'),
    array('mxdev.darevita.com','MEX'),
    array('intdev.darevita.com','INT')
);

    //-------------------------//
    // CONDITIONS
    //-------------------------//

$idiomas = [
    'eng' => 'Eng',
    'esp' => 'Esp',
    'fra' => 'Fra',
    'jpn' => 'Jpn',
    'por' => 'Por',
    'chi' => 'Chi',
    'cor' => 'Cor'
];

$Condicion_lan = isset($idiomas[$idioma]) ? $idiomas[$idioma] : 'Desconocido';



?>



























