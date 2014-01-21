<?php global $redux; // This is your opt_name. ?>
<div class="wrap container head-container">
	<div class="row">
		<div class="small-12 medium-6 large-6 columns">
			<div class="logo">
			<?php if( $redux['cornerstone_logo']['url'] && $redux['cornerstone_logo']['url'] != '') { ?>
				<img src="<?php echo $redux['cornerstone_logo']['url']; ?>" >
			<?php } else { ?>
				<h1>
					<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
				</h1>
				<p class="site-tagline"> <?php echo get_bloginfo('description'); ?></p>
			<?php } ?>
			</div> <!-- ./ logo -->
		</div>
		<!-- list the social items if set -->
		<div class="small-12 medium-6 large-6 columns social-links">
			<?php if( $redux['cornerstone_instagram_url'] && $redux['cornerstone_instagram_url'] != '') { ?>
				<a href="<?php echo $redux['cornerstone_instagram_url']; ?>"><i class="fi-social-instagram"></i></a>	
			<?php } ?>			
			<?php if( $redux['cornerstone_youtube_url'] && $redux['cornerstone_youtube_url'] != '') { ?>
				<a href="<?php echo $redux['cornerstone_youtube_url']; ?>"><i class="fi-social-youtube"></i></a>
			<?php } ?>
			<?php if( $redux['cornerstone_google_url'] && $redux['cornerstone_google_url'] != '') { ?>
				<a href="<?php echo $redux['cornerstone_google_url']; ?>"><i class="fi-social-google-plus"></i></a>
			<?php } ?>	
			<?php if( $redux['cornerstone_linkedin_url'] && $redux['cornerstone_linkedin_url'] != '') { ?>
				<a href="<?php echo $redux['cornerstone_linkedin_url']; ?>"><i class="fi-social-linkedin"></i></a>
			<?php } ?>
			<?php if( $redux['cornerstone_twitter_url'] && $redux['cornerstone_twitter_url'] != '') { ?>
				<a href="<?php echo $redux['cornerstone_twitter_url']; ?>"><i class="fi-social-twitter"></i></a>
			<?php } ?>		
			<?php if( $redux['cornerstone_facebook_url'] && $redux['cornerstone_facebook_url'] != '') { ?>
				<a href="<?php echo $redux['cornerstone_facebook_url']; ?>"><i class="fi-social-facebook"></i></a>
			<?php } ?>	
		</div>
	</div>	<!-- ./ row -->
	<div class="contain-to-grid">
		<nav class="top-bar" role="navigation" data-topbar>
			<ul class="title-area">
	    	<li class="name">
	      		
	    	</li>
	    	<li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
			</ul>
			<section class="top-bar-section">
				<?php cornerstone_top_bar_l(); ?>
				<?php cornerstone_top_bar_r(); ?>
			</section>
		</nav>
	</div>	
</div>	<!-- ./ wrap -->