<?php
// index.php Home page
include_once $_SERVER['DOCUMENT_ROOT'].'/_inc/config.php';

$pageId = "404Page";
$pageTitle = "404 Page not found";
$pageDescription = "";
$pageKeywords = "";
$robots = 'no';

include_once (INC.'header.php'); ?>

<h1><?php echo isset($pageTitle) ? $pageTitle : "Page Title"; ?></h1>

<h2>404 Error. Page not found!</h2>
<p><a href="/">Home page</a></p>

<?php include_once (INC.'footer.php'); ?>