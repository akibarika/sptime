<?php /* 
	  	Template Name: Blog Search Page
	  */ ?>
<?php get_header(); ?>	
	<section class="blog-wrap">
		<div class="nav">首页 > 搜索</div>
		<div class="main"><?php printf( __( '“%s”的搜索结果', 'sptime' ), get_search_query() ); ?></div>
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
					Posted in <?php the_category(' '); ?> |
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
				<h3>没有搜索到相关内容</h3>
			</div>
			<?php endif; ?> 
		</div>
		<div class="clear"></div>
		<?php wpbeginner_numeric_posts_nav(); ?> 
	</section>
	
<?php get_footer(); ?>