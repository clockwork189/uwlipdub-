<?php
/*
    Template Name: Splash Page
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;" charset="<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php wp_title(); ?> </title>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/default.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo( "template_url" ); ?>/js/jquery.js"> </script>
<script type="text/javascript" src="<?php bloginfo( "template_url" ); ?>/js/controller.js"> </script>
</head>

<body>
<div id ="bg">
 <a href="http://uwaterloolipdub.ca/?page_id=191"><img id="background_image" src="<?php bloginfo( "template_directory"); ?>/images/libdub_front.jpg" alt="" onclick="fadeBackground();"></a>
</div>
</body>
</html>
