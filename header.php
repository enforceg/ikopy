<!DOCTYPE html>
 
<html>
 
<head>
   
   <meta charset="UTF-8">
   <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css" />
   <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/img/favicon.png" type="image/x-icon">
   <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

	<style type="text/css">
	 #featured { width: 1240px; height: 450px; background: #009cff url('<?php echo bloginfo('template_url'); ?>/orbit/loading.gif') no-repeat center center; overflow: hidden; }
	</style>
  
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/orbit.css">  
  
    <!--[if IE]>
	 <style type="text/css">
		.timer { display: none !important; }
		div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
	 </style>
    <![endif]-->
  
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/jquery.orbit.js"></script>
      
	<script type="text/javascript">
		 $(window).load(function() {
			$('#featured').orbit({
			   'bullets': true,
			   'timer' : true,
			   'animation' : 'horizontal-slide'
			});
		 });
	</script>
		<?php wp_head(); ?>
</head>
  
<body <?php body_class(); ?>>
   
		<div class="main">

			<div class="header">
			
				<div class="logo">
					<a href="#"><img src="<?php echo bloginfo('template_url'); ?>/img/logo.png" alt=""></a>  						
				</div>

				<div class="social-container">
					<a href="#" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/img/twitter.png" alt=""></a>
					<a href="https://vk.com/riyaka_v" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/img/vk.png" alt=""></a>
					<a href="#" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/img/goo.png" alt=""></a>
					<a href="mailto:rijaka.vit@gmail.com"><img src="<?php echo bloginfo('template_url'); ?>/img/mail.png" alt=""></a>
				</div>

			</div>
					
			<?php wp_nav_menu('menu=Меню'); ?>
				
					