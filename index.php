<?php get_header(); ?>
<div class="wrap">
	<div role="main" class="row">
		<div class="col-xs-12 col-md-8 col-lg-8">
			<div class="box">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_post_thumbnail(array(183,183)); ?>
				<h2>
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>
				<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
				<div class="entry">
			 		<?php echo apply_filters('the_content', substr(get_the_content(), 0, 200) ); ?>
			 	</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="col-xs-12 col-md-4 col-lg-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_template_part( 'nav', 'below' ); ?>
</div>
<?php get_footer(); ?>