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
				<p class="post-info">autor <?php the_author_posts_link(); ?> &bull; <?php the_time('j F Y'); ?></p>
				<div class="entry">
					<?php the_content('Czytaj dalej'); ?>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
		<div class="col-xs-12 col-md-4 col-lg-4">
			<div class="widget">
				<h2 class="widget-header">Najczęściej komentowane</h2>
			    <?php $wp_query =
			        new WP_Query('caller_get_posts=1&orderby=comment_count&posts_per_page=10');
			        while ($wp_query->have_posts()) : $wp_query->the_post(); { ?>
						<div class="post">
							<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							<p class="post-info">autor <?php the_author_posts_link(); ?> &bull; <?php the_time('j F Y'); ?>
								<span class="pull-right"><?php comments_number('0 kometarzy', '1 komentarz', '% komentarzy'); ?></span>
							</p>
							<div class="entry"><?php echo substr(strip_tags(get_the_content()), 0, 255) ?></div>
						</div>	
			    <?php } endwhile; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_template_part( 'nav', 'below' ); ?>
</div>
<?php get_footer(); ?>