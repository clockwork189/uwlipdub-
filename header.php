<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?> </title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;" charset="<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" href="<?php bloginfo('rss2_url'); ?>" type="text/css" />
<link rel="alternate" href="<?php bloginfo('atom_url'); ?>" title="Atom 0.3" type="application/atom+xml" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo( "template_url" ); ?>/js/jquery.js"> </script>
<script type="text/javascript" src="<?php bloginfo( "template_url" ); ?>/js/hoverIntent.js"> </script>
<script type="text/javascript" src="<?php bloginfo( "template_url" ); ?>/js/jquery.dropdown.js"> </script>
<script type="text/javascript" src="<?php bloginfo( "template_url" ); ?>/js/jquery.dropdownPlain.js"> </script>
<script type="text/javascript" src="<?php bloginfo( "template_url" ); ?>/js/jquery.easing.1.3.js"> </script>
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); //off by default ?>
<?php wp_head(); ?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25261267-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script type="text/javascript" >
$(document).ready(function(){
    $("#navbar #parents").mouseover(function(){
        $(this).stop().animate({height:'140px'},{queue:false,duration:600,easing: 'easeOutBounce'})
    });
    $("#navbar #parents").mouseout(function(){
        $(this).stop().animate({height:'40px'},{queue:false,duration:600,easing: 'easeOutBounce'})
    });
});

</script>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="logo" style="padding-top:20px;">
            <a href="http://uwaterloolipdub.ca/?page_id=191"><img src="<?php bloginfo('template_directory'); ?>/images/Lipdub-Logo.png" style="margin: 0 auto; text-align:center; padding-left:80px;" id="lipdub_logo"></a>
        </div>
        <div id="navbar">   
            <ul>
		<li class="green">
                    <a href="http://uwaterloolipdub.ca/?page_id=191" >HOME</a>
                
                </li>
		<li class="red" id="parents">
                    <a href="http://uwaterloolipdub.ca/?page_id=2">PROJECT</a>
                        <a href="http://uwaterloolipdub.ca/?page_id=175" class="sublinks first" style="padding-top:3px;">News</a>
                        <a href="http://uwaterloolipdub.ca/?page_id=148" class="sublinks">What is a Lipdub?</a>
                        <a href="http://uwaterloolipdub.ca/?page_id=42" class="sublinks">Our Team</a>
                        <a href="http://uwaterloolipdub.ca/?page_id=152" class="sublinks">Philanthropy</a>
                    
                </li>
		<li class="pink" id="parents">
                    <a href="#">GET INVOLVED</a>
                        <a href="https://docs.google.com/spreadsheet/viewform?hl=en_US&formkey=dExKTE9qdjAwNnJJeGk1NTI3TnJYbkE6MQ#gid=0" style="padding-top:3px;" class="sublinks">Be in the Video</a>
                        <a href="https://spreadsheets.google.com/spreadsheet/viewform?formkey=dElSTGpPZmRtY2t0UUl4NGVua1NHWEE6MQ" target="_blank" class="sublinks first">Volunteer Applications</a>
                </li>
		<li class="blue" id="parents">
                    <a href="#">SPONSORSHIP</a>
                        <a href="http://uwaterloolipdub.ca/?page_id=167 " class="sublinks first" style="padding-top:3px;">Corporate Sponsors</a>
                        <a href="http://uwaterloolipdub.ca/?page_id=170" class="sublinks">Philanthropic Sponsors</a>
                </li>
		<li class="purple" id="parents">
                    <a href="" >MEDIA</a>
                        <a href="http://uwaterloolipdub.ca/?page_id=165"  style="padding-top:3px;"class="sublinks">Videos</a>
                </li>
		<li class="orange">
                    <a href="http://uwaterloolipdub.ca/?page_id=38">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
