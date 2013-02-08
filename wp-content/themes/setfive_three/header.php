<?php
/** header.php
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0 - 05.02.2012
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<?php tha_head_top(); ?>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<?php if( SITE_NAME == "setfive" ): ?>
  			<meta name="keywords" content="symfony, Boston, consulting, php, javascript, Drupal" />
  			<meta name="description" content="Setfive Consulting specializing in developing tools to help power your business. We're a Boston based team that solves problems, ships code, and has a great time doing both." />
  			<meta name="author" content="Setfive Consulting LLC">
		<?php endif; ?>
		
		<title><?php wp_title( '&laquo;', true, 'right' ); ?></title>
				
		<?php tha_head_bottom(); ?>
		<?php wp_head(); ?>
		
		<link href="/wp-content/themes/setfive_three/styles.less" rel="stylesheet/less" type="text/css">	
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='/wp-content/themes/setfive_three/responsive.css' rel='stylesheet' type='text/css'>
        
		<script type="text/javascript" src="/wp-content/themes/setfive_three/js/less-1.3.3.min.js"></script>
		<script type="text/javascript" src="/wp-content/themes/setfive_three/js/main.js"></script>
		<script type="text/javascript" src="/wp-content/themes/setfive_three/js/jquery.color.js"></script>
		
	</head>
	
	<body <?php body_class(); ?>>
	
        <hr class="fancy-line">
	
        <div class="container header-body">
            <div class="row">        
                    <div class="span12">        
                    <div class="header-inner">
                        <div class="pull-left">
                            <div class="header-logo">
                            	<a href="/"><img src="/wp-content/themes/setfive_three/logo_website_no_consulting.png"></a>
                           	</div>
                        </div>                
                        <div class="nav-container">
                            <ul class="listless main-nav">
                                <li><a href="http://www.setfive.com">Home</a></li>
                                <li><a href="/what-we-do/">What we do</a></li>
                                <li><a href="/about-us/">About Us</a></li>
                                <li><a href="/work/">Work</a></li>
                                <li><a href="/careers/">Careers</a></li>
                                <li><a href="/contact-us/">Contact</a></li>
                                <li><a href="http://shout.setfive.com">Blog</a></li>
                            </ul>
                        </div>                        
                        <div class="clearfix"></div>                        
                        </div>
                    </div>            
             </div>            
        </div>	
	
        <div class="container-background">
            <div class="homepage-blue-bg">
                <div class="homepage-banner">
                    <div class="container">
                        <div class="row">
	                            <div class="span7">                            	
	                                <div class="banner-text">	                                
		                        	<?php 
		                        	global $post;                        	                        
		                        	if (get_post_meta($post->ID, 'header_banner', null)) {
		                        		echo array_pop(get_post_meta($post->ID, 'header_banner', null));
		                        	}else if( $GLOBALS["header_banner"] ) {
		                        		echo $GLOBALS["header_banner"];
		                        	}else{
		                        	?>	                                	                                
	                                	We build the <em>tools</em> that help power your <em>business</em>.
	                               	<?php } ?>
	                                </div>
	                            </div>
                        </div>
                    </div>
                </div>
            </div>
            	
    		<div class="container">
    		    <div class="content-container">
        			<div id="page" class="hfeed row-fluid">

        			    <?php 
        			    tha_header_before();
        				tha_header_bottom();
        				tha_header_after();
				
/* End of file header.php */
/* Location: ./wp-content/themes/the-bootstrap/header.php */