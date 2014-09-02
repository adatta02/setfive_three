<?php global $dm_settings; ?>

<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"></a>
            </div>
            <div class="collapse navbar-collapse">
                <div class="logo">
                    <a href="/"><img src="<?php echo get_template_directory_uri() ?>/img/logo_noconsulting.png"></a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="http://www.setfive.com/">Home</a></li>
                    <li><a href="http://www.setfive.com/case-studies">Case Studies</a></li>
                    <li><a href="http://www.setfive.com/consulting">Consulting</a></li>
                    <li><a href="http://www.setfive.com/team">Team</a></li>
                    <li class="active"><a href="http://shout.setfive.com">Blog</a></li>
                    <li><a href="http://www.setfive.com/contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
</div>

<?php if ( is_front_page() || is_single() || isset($pageTitle) ): ?>

<?php 

$url = null;
$credit = null;

if( is_single() ){
	$url = get_post_custom_values("photo_bg_url");
	$credit = get_post_custom_values("photo_credit");
	
	if( $url && count($url) ){
		$url = get_template_directory_uri() . "/img/" . $url[0];
	}
	
	if( $credit && count($credit) ){
		$credit = $credit[0];
	}	
}

if( !isset($pageTitle) ){
	$pageTitle = null;
}

?>

<div class="halfsize-slide-wrapper <?php echo $url && strpos($url, "white") !== false ? "white-image" : "" ?>" 
	style="<?php echo $url ? "background-image: url('" . $url . "')" : ""?>">
	<div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="slide-body-container text-center">
                    		<?php if ( is_front_page() ): ?>                  		
                        	<h2>Blog</h2>
                        	<p><?php bloginfo( 'description' ); ?></p>
                        <?php endif; ?>
                        
                        <?php if( is_single() ): ?>
                        	<h2><?php the_title(); ?></h2>
                        <?php endif; ?>
                        
                        <?php if( $pageTitle ): ?>
                        	<h2><?php echo $pageTitle; ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

		<?php if( $credit ): ?>
		<div class="photo-credit">
    	Photo credit: <a href="<?php echo $credit?>" target="_blank"><?php echo $credit?></a>
		</div>
		<?php endif; ?>
		
  </div>	    
</div>
<?php endif; ?>

<div class="container search-container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-5 col-md-offset-7">
				
				<form action="/" class="searchform form-inline" id="searchform" method="get" role="search">
						<div class="input-group">      					
						  <input type="search" id="s" class="form-control" name="s" value="" placeholder="Search...">
						  <span class="input-group-btn">
								<input class="btn btn-default" type="submit" value="Search" id="searchsubmit">
						  </span>
					 </div>				
				</form>				
				
			</div>
		</div>
	</div>
</div>

<div class="container">