<?php /* 
	  	Template Name: Blog Index
	  */ ?>
<?php get_header(); ?>	
	<section class="blog-wrap">
		<div class="nav">首页 > 日志</div>
		<div class="main">日志</div>
		<hr class="dot"></hr>
		<div class="blogs left">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="blog">
				<div class="title">
					<a href="<?php the_permalink(); ?>" title="永久链接：<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</div>
				<div class="mate">
					<time><?php the_time('Y-m-d') ?></time> | 
					written by <?php the_author_link(); ?> |
					Posted in <?php the_category(' '); ?>|
					<?php edit_post_link(); ?>
				</div>
				<div class="excerpt">
					<?php if(has_excerpt()) : ?>
						<?php the_excerpt(); ?>
					<?php else : ?>
						<?php echo cut_str(strip_tags(apply_filters('the_content',$post->post_content)),180); ?>
					<?php endif; ?>						
				</div>
				<div class="more">
					<a class="read-more" href="<?php the_permalink(); ?>">More</a>
				</div>
				
			</div>
			
			<?php endwhile; ?>
			<?php else : ?>
			<div class="blog">
				<span>404 Not found</span>
			</div>
			<?php endif; ?> 
		</div>
		<?php get_sidebar();?>
		<div class="clear"></div>
		<?php wpbeginner_numeric_posts_nav(); ?> 
	</section>
	
<?php get_footer(); ?>