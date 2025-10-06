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
$Innerpage_Id = (empty($_GET['id'])) ? '' : $_GET['id'];
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

$Host_Site      = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"];
$Lang           = "es";
$Footer_Rights  = $Company_Name."© ".date("Y").". All rights reserved";

    //-------------------------//
    // LINKS
    //-------------------------//

$isWebDemo = explode('.', $_SERVER['HTTP_HOST'])[0] === 'webdemo';

$us_url = $isWebDemo ? 'usdev' : 'us';
$mx_url = $isWebDemo ? 'mxdev' : 'mx';
$int_url = $isWebDemo ? 'intdev' : 'int';

$Register = "https://$us_url.darevita.com/register/?ref=$user_replica";
$Revenuez_Register = "https://$int_url.darevita.com/register/";
$Login = "https://$us_url.darevita.com/my-account/";
$Revenuez_Login = "https://$int_url.darevita.com/my-account/";

$GetReplica = isset($user_replica) ? "?ref=$user_replica" : '';

$Shop_usa = "https://$us_url.darevita.com/?ref=$user_replica";
$Shop_mex = "https://$mx_url.darevita.com/?ref=$user_replica";
$Shop_int = "https://$int_url.darevita.com/?ref=$user_replica";
$Shop_can = "https://ca.darevita.com/?ref=$user_replica";

$Shop_usa_restore = "https://$us_url.darevita.com/product/restore/?ref=$user_replica";
$Shop_usa_revive = "https://$us_url.darevita.com/product/revive/?ref=$user_replica";
$Shop_usa_rejuvenate = "https://$us_url.darevita.com/product/rejuvenate/?ref=$user_replica";
$Shop_usa_revenuez = "https://$int_url.darevita.com/";

$Shop_mex_restore = "https://$mx_url.darevita.com/product/restore/?ref=$user_replica";
$Shop_mex_revive = "https://$mx_url.darevita.com/product/revive/?ref=$user_replica";
$Shop_mex_rejuvenate = "https://$mx_url.darevita.com/product/rejuvenate/?ref=$user_replica";
$Shop_mex_revenuez = "https://$int_url.darevita.com/";

$Shop_can_restore = "https://ca.darevita.com/product/restore/?ref=$user_replica";
$Shop_can_revive = "https://ca.darevita.com/product/revive/?ref=$user_replica";
$Shop_can_rejuvenate = "https://ca.darevita.com/product/rejuvenate/?ref=$user_replica";
$Shop_can_revenuez = "https://$int_url.darevita.com/";

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
        array('revive', 'Revive',$Products_title_01),
        array('restore', 'Restore',$Products_title_03),
        array('rejuvenate', 'Rejuvenate',$Products_title_02)
    ))
);
$Sub_reg = array(
    array($Shop_usa,'USA'),
    array($Shop_mex,'MEX'),
    $isWebDemo ? NULL : array($Shop_int,'INT'),
    $isWebDemo ? NULL : array($Shop_can,'CAN')
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
    'ita' => 'Ita',
    'cor' => 'Cor'
];

$Condicion_lan = isset($idiomas[$idioma]) ? $idiomas[$idioma] : 'Desconocido';

    //-------------------------//
    // CONTACT
    //-------------------------//

$Email = "support@darevita.com";
$Phone = "+14808088204";
$Address = "DareVita International Inc.,<br>24304 S 207th Pl,<br>Queen Creek, AZ, 85142, USA";
