<?php
// index.php Home page
include_once $_SERVER['DOCUMENT_ROOT'].'/_inc/config.php';

$pageId = "homePage";
$pageTitle = "Home Page";
$pageDescription = "Page Description";
$pageKeywords = "keywords, here";

include_once (INC.'header.php'); ?>

<h1><?php echo $pageTitle; ?></h1>



<?php include_once (INC.'footer.php'); ?>