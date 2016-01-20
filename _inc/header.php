<!DOCTYPE html>
<html dir="ltr" lang ="ro-RO">
<head>
<meta charset="UTF-8">
<title><?php 
	if (isset($pageTitle) && isset($siteTitle)) {
		 echo $pageTitle . " | " . $siteTitle;
	} elseif (isset($siteTitle) && (!isset($pageTitle)) {
		echo $siteTitle;
	} else {
		echo "Page Title Here";
	}
?></title>
<?php if (isset($pageId) && $pageId == '404Page') {
echo '<meta name="robots" content="noindex, nofollow">'."\n";
} ?>
<meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : "No description"; ?>" />
<meta name="keywords" content="<?php echo isset($pageKeywords) ? $pageKeywords : "No keywords here"; ?>" />
<meta name="author" content="<?php echo isset($author) ? $author : "Author"; ?>" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--[if IE]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- CSS  -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/_css/normalize.css" />
<link rel="stylesheet" href="/_css/style.css" />
<!-- End CSS -->
</head>
<body id="<?php if (isset($pageId)) {echo($pageId);}else{echo "default";} ?>" class="page">

<!-- Header -->
	<header id="header">
		<div id="logo">Initio</div>
		<nav id="menu">
			<?php include_once ('menu.php'); ?>
		</nav>
	</header>
<!-- Header End -->
