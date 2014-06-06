<?php get_header(); ?>	
	<section class="blog-wrap single">
		<div class="nav">首页 > 日志 > <?php the_title(); ?></div>
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
		<div class="share">
			<span>分享</span> 

		</div>
		
		<div class="post-nav">
			<?php
			$categories = get_the_category();
			        $categoryIDS = array();
			        foreach ($categories as $category) {
			            array_push($categoryIDS, $category->term_id);
			        }
			        $categoryIDS = implode(",", $categoryIDS);
			?>
			<span class="previous"><?php if (get_previous_post($categoryIDS)) { previous_post_link('<i class="fa fa-arrow-circle-o-left"></i> 上一篇: %link','%title',true);} else { echo "已是最后文章";} ?></span>
			<span class="next"><?php if (get_next_post($categoryIDS)) { next_post_link('<i class="fa fa-arrow-circle-o-right"></i> 下一篇: %link','%title',true);} else { echo "已是最新文章";} ?>	</span>	
		</div>
		<div class="clear"></div>
		<script type='text/javascript' charset='utf-8' src='http://open.denglu.cc/connect/commentcode?appid=92281denu1nY36fiP65bPU9Oc5gap5&postid=<?php the_ID();?>&title=<?php the_title();?>'></script>
	</section>
	
<?php get_footer(); ?>