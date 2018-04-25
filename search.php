<?php get_header(); ?>
<div class="container">
<div class="search-header">
	<?php 
		$allsearch = new WP_Query("s=$s&showposts=0"); 
	?>
	<h3 class="separator">
		<div class="wpb_wrapper"><b><?php echo $allsearch ->found_posts; ?></b> restultados para <b><?php the_search_query(); ?></b>.</div>
	</h3>
</div>
<div class='search-results'>
<?php if (have_posts()): while (have_posts()) : the_post();?>
<div>
	<?php the_content(); ?>
</div>
<?php endwhile; ?>
</div>
<?php else: ?>
<div class="search-header">
	<?php 
		$allsearch = new WP_Query("s=$s&showposts=0"); 
	?>
	<h3 class="separator">
		<div class="wpb_wrapper"><b><?php echo $allsearch ->found_posts; ?></b> restultados para <b><?php the_search_query(); ?></b>.</div>
	</h3>
</div>
<?php endif;?>
</div>
<?php get_footer(); ?>