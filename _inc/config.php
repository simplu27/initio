<?php
// _inc/config.php

// in pagina trebuie introdus fisierul de includere pentru  config.php
// include_once $_SERVER['DOCUMENT_ROOT'].'/_inc/config.php';
define('ROOT', $_SERVER['DOCUMENT_ROOT']."/");
define('INC', ROOT."_inc/");
//restul fisierelor de inclus se introduc astfel:
//include_once (INC.'header.php');

$siteName = 'Initio';