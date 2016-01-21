<?php
// index.php page3
include_once $_SERVER['DOCUMENT_ROOT'].'/_inc/config.php';

$pageId = "page3Page";
$pageTitle = "Page 3";
$pageDescription = "Page Description";
$pageKeywords = "keywords, here";

include_once (INC.'header.php'); ?>

<h1><?php echo isset($pageTitle) ? $pageTitle : "Page Title"; ?></h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore consectetur ab quaerat ea dolores quibusdam dolor, ratione officia magnam, ducimus rerum deleniti quasi, necessitatibus consequatur molestias quisquam quo porro optio earum suscipit voluptates harum. Laborum sed quae cum sequi in, corporis voluptatum totam veniam ipsam, neque, accusamus repellat illum dignissimos nostrum. Explicabo soluta nam nihil molestiae porro excepturi perspiciatis commodi totam et voluptatem, libero quibusdam, placeat fuga ex sapiente alias consequatur accusamus accusantium molestias. Saepe illo, blanditiis ipsa? Nesciunt, laborum.</p>

<?php include_once (INC.'footer.php'); ?>