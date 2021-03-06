<?php 
/*
Template Name: 友链页面
*/
get_header();?>
<?php if(have_posts()): while(have_posts()):the_post();  ?>
<div id="page-content" class="page-single" >
	<div class="page-title" style="background:#504B51 url(<?php echo links_banner_pic(); ?>);background-repeat: no-repeat;background-size: cover;background-position: center top;">
		<div class="container">
			<h1 class="title">
				<?php the_title(); ?>
			</h1>
			<div class="page-dec">
				<?php the_content();?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="page-content">
			<?php echo get_link_items(); ?>
		</div>
		<div class="clear"></div>
		<?php if (comments_open()) comments_template( '', true ); ?>
		
	</div>
</div>
<?php endwhile; endif; ?>	
<?php get_footer(); ?>
