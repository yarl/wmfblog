<?php get_header(); ?>
<div class="wrap">
	<div role="main" class="row">
		<div class="col-xs-12 col-md-8 col-lg-8">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post post-short">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(183,183)); ?></a>
				<h3>
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h3>
				<p class="post-info"><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></p>
				<div class="entry">
					<?php the_content('Czytaj dalej'); ?>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
		<div class="col-xs-12 col-md-4 col-lg-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_template_part( 'nav', 'below' ); ?>
</div>
<?php get_footer(); ?>