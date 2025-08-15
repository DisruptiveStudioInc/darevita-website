<?php
$idiomas_permitidos = ['chi', 'cor', 'eng', 'esp', 'fra', 'jpn', 'por', 'ita'];

if (isset($_GET["language"]) && in_array($_GET["language"], $idiomas_permitidos)) {
    $_SESSION["language"] = $_GET["language"];
} elseif (!isset($_SESSION["language"])) {
    $_SESSION["language"] = "eng"; // idioma por defecto
}

// Incluye el archivo correspondiente
include $_SESSION["language"] . ".php";
?>


