<?php
    /*Template Name: Event */
    
?>

<header id="header">
    <div class="container">
        <div id="logo" class="horizontaleader pull-left">
        <h1><a href="<?php echo get_home_url(); ?>" class="scrollto"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ibj-logonew.png"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>
        <nav id="nav-menu-container">
            <?php get_template_part( 'template-parts/menu-list' );?>
        </nav><!-- #nav-menu-container -->
    </div>
</header>

<?php wp_head(); ?>
<!-- Get Basic Content Template -->
<?php //get_template_part('template-parts/most-popular-news'); ?>
<div id="content" role="main">
	<?php while ( have_posts() ) : the_post(); ?>     
		<?php // Get Standard Comp	onents
			if( have_rows('basic-content') ):

				while ( have_rows('basic-content') ) : the_row();

					$section_path = 'template-parts/'.get_row_layout();

					get_template_part($section_path);

				endwhile;

			endif;
		?>	
	<?php endwhile; // end of the loop. ?>
	<?php //get_template_part('template-parts/full-width-blogs'); ?>
</div><!-- #content -->
<?php get_footer(); ?>