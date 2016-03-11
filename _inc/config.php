<?php
// _inc/config.php

// in pagina trebuie introdus fisierul de includere pentru  config.php
// include_once $_SERVER['DOCUMENT_ROOT'].'/_inc/config.php';
define('ROOT', $_SERVER['DOCUMENT_ROOT']."/");
define('INC', ROOT."_inc/");
//restul fisierelor de inclus se introduc astfel:
//include_once (INC.'header.php');

$siteName = 'Initio';


// In meniu, adauga clasa "active-menu" in functie de pagina
// <li><a <!php activeClass('homePage'); !>href="/">Home</a></li>
	function activeClass($currPage) {
		global $pageId;
		if (isset($pageId) && ($pageId == $currPage)){
			echo 'class="active-menu" ';
		}
	} // activeClass

// Functie pentru inserare meta in head,
// in cazul in care nu se doreste: no-index, no follow
// Pentru paginile care nu necesita indexare, la variabilele paginii,
// se adauga:
// $robots = 'no';

// Insereaza functia in head.php
	function robots_noindex() {
		if (isset($robots) && ($robots === 'no')) {
			echo '<meta name="robots" content="noindex,nofollow">'."\n";
		}
		else {
			// echo '<meta name="robots" content="index,follow">'."\n";
		}
	}

// Copyright function
// In footer call copyright();
// <p>Copyright &copy; <?php copyright(); !> All rights reserved.</p>

	function copyright(){
		$start_year = '2015';
		$current_year = date('Y');

		if ($current_year == $start_year) {
			echo $start_year;
			// Return 2015
		} else {
			echo $start_year . " &ndash; " . $current_year;
			// Return 2015 - 2016 if current_year is 2016
		}
	}

// Copyright function end

