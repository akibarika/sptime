<?php get_header(); ?>	
	<section class="blog-wrap page">
		<div class="nav">首页 > <?php the_title(); ?></div>
		<div class="main"><?php the_title(); ?></div>
		<hr class="dot"></hr>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="detail-meta right">
			<time><?php the_time('Y-m-d') ?></time> | 
			written by <?php the_author_link(); ?> |
			Posted in <?php the_category(' '); ?>|
			<?php edit_post_link(); ?>
		</div>
		<div class="article">
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php else : ?>
			<div class="article">
				<span>404 Not found</span>
			</div>
			<?php endif; ?> 
		</div>
		<div class="clear"></div>
		
	</section>
	
<?php get_footer(); ?>