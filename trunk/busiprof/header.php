<?php
/*
 * @file           header.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webrit
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/header.php
*/	
?>
<!--Header Starts-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">  
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php 
				//get theme options here
				if(get_option('busiprof_theme_options')!='')
			
			{
				$busiprof_current_options=get_option('busiprof_theme_options');
			}
			if($busiprof_current_options['upload_image_favicon']!=''){?>
			<link rel="shortcut icon" href="<?php  echo $busiprof_current_options['upload_image_favicon']; ?>" /> 
			<?php } ?>	
			
				<link rel="profile" href="http://gmpg.org/xfn/11" />
				<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
				<?php wp_head(); ?>
	<!--引用百度地图API-->
	<style type="text/css">
    		html,body{margin:0;padding:0;}
    		.iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    		.iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

</head>
<body <?php body_class(); ?>>
			<div class="container">
						<div class="navbar" id="busimenu">
								<div class="navbar-inner">
								<div class="container">
									<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</a>
								
								
								<?php 	if($busiprof_current_options['upload_image']!='') { ?>
								
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">
								<img src="<?php echo $busiprof_current_options['upload_image']; ?>"  alt="Logo" class="logo-img" />
								</a>
								 
								<?php   } else { ?>
									
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">
								<img src="<?php echo get_template_directory_uri();?>/images/logo.png">
								</a>
								<?php } ?>
								<div class="nav-collapse collapse navbar-responsive-collapse">
								 <?php
											wp_nav_menu( array(  
												'theme_location' => 'primary',
												//'container'  => 'nav-collapse collapse navbar-inverse-collapse',
												'menu_class' => 'nav',
												'fallback_cb' => 'busiprof_fallback_page_menu',
												'walker' => new busiprof_nav_walker()
																)
														);
								?> 
								</div>			<!-- /.nav-collapse -->
								</div>
								</div><!-- /navbar-inner -->
						</div>
				</div>	
