<?php
session_start();
define("FOLD_PROY",$_SERVER["CONTEXT_DOCUMENT_ROOT"]."/proyecto/");
define ("FOLDER_TEMPLATE",FOLD_PROY."template/");
define("URL_PROY","/proyecto/");
define ("URL_CSS",URL_PROY."vendor/fontawesome-free/css/");
//
define ("URL_FONTS",URL_PROY."assets/fonts/");
// define("URL_IMG",URL_PROY."assets/img/");
define ("URL_JS",URL_PROY."vendor/");
//
include(FOLD_PROY."Model/session.php");
?>