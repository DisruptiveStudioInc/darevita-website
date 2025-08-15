<?php

//-------------------------------------------//
// FUNCIÓN PARA DETECTAR PAÍS POR IP
//-------------------------------------------//
/*function obtenerPaisPorIP() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $json = @file_get_contents("http://ipinfo.io/{$ip}/json");
    if ($json) {
        $datos = json_decode($json, true);
        return isset($datos['country']) ? $datos['country'] : null; // ej. "MX", "US"
    }
    return null;
}*/

//-------------------------------------------//
// DETECCIÓN DE REGIÓN Y ASIGNACIÓN DE LINK
//-------------------------------------------//
/*if (!isset($_SESSION["pais"])) {
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
}*/

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
    // LINKS
    //-------------------------//

$Register = "https://usdev.darevita.com/register/?ref=$user_replica";
$Login = "https://usdev.darevita.com/my-account/";

$Shop_usa = "https://usdev.darevita.com/?ref=$user_replica";
$Shop_mex = "https://mxdev.darevita.com/?ref=$user_replica";
$Shop_int = "https://intdev.darevita.com/?ref=$user_replica";

$Shop_usa_restore = "https://usdev.darevita.com/product/restore/?ref=$user_replica";
$Shop_usa_revive = "https://usdev.darevita.com/product/revive/?ref=$user_replica";
$Shop_usa_rejuvenate = "https://usdev.darevita.com/product/rejuvenate/?ref=$user_replica";

$Shop_mex_restore = "https://mxdev.darevita.com/product/restore/?ref=$user_replica";
$Shop_mex_revive = "https://mxdev.darevita.com/product/revive/?ref=$user_replica";
$Shop_mex_rejuvenate = "https://mxdev.darevita.com/product/rejuvenate/?ref=$user_replica";

    //-------------------------//
    // MENU
    //-------------------------//

$Menu = array(
    array('#home','active',$Menu_01),
    array('#darevita','',$Menu_02),
    array('#treo','',$Menu_03),
    array('','',$Menu_04),
    array('','', $Menu_05),
    array('?p=earn','', $Menu_06)
);

    //-------------------------//
    // SUBMENU
    //-------------------------//

$Sub = array(
    array('Treo', array(
        array('revive', 'Revive',$Products_title_03),
        array('restore', 'Restore',$Products_title_01),
        array('rejuvenate', 'Rejuvenate',$Products_title_02)
    ))
);
$Sub_reg = array(
    array($Shop_usa,'USA'),
    array($Shop_mex,'MEX'),
    array($Shop_int,'INT')
);

    //-------------------------//
    // CONDITIONS
    //-------------------------//

$idiomas = [
    'eng' => 'Eng',
    'esp' => 'Esp',
    //'fra' => 'Fra',
    //'jpn' => 'Jpn',
    //'por' => 'Por',
    'chi' => 'Chi'
    //'cor' => 'Cor'
];

$Condicion_lan = isset($idiomas[$idioma]) ? $idiomas[$idioma] : 'Desconocido';



?>



























