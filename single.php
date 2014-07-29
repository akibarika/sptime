<?php get_header(); ?>	
	<section class="blog-wrap single">
		<div class="nav">首页 > 日志 > <?php the_title(); ?></div>
		<article>
			<div class="main"><?php the_title(); ?></div>
			<hr class="dot"></hr>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="detail-meta right">
				<time><?php the_time('Y-m-d') ?></time> | 
				written by <?php the_author_link(); ?> |
				Posted in <?php the_category(' '); ?>
				<?php edit_post_link(__('Edit This'),' |'); ?>
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
		</article>
		<div class="share">
			<span>分享</span> 
			<!-- JiaThis Button BEGIN -->
			<div class="jiathis_style">
				<a class="jiathis_button_tsina"></a>
				<a class="jiathis_button_tqq"></a>
				<a class="jiathis_button_weixin"></a>
				<a class="jiathis_button_renren"></a>
				<a class="jiathis_button_baidu"></a>
				<a class="jiathis_button_qzone"></a>
				<a class="jiathis_button_googleplus"></a>
				<a class="jiathis_button_twitter"></a>
				<a class="jiathis_button_fb"></a>
				<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
			</div>
			<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1370069969982485" charset="utf-8"></script>
			<!-- JiaThis Button END -->
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
			<span class="previous"><?php if (get_previous_post($categoryIDS)) { previous_post_link('<div class="prevpost"> %link</div>','%title',true);} else { echo "已是最后文章";} ?></span>
			<span class="next"><?php if (get_next_post($categoryIDS)) { next_post_link('<div class="nextpost"> %link</div>','%title',true);} else { echo "已是最新文章";} ?>	</span>	
		</div>
		<div class="clear"></div>
		<?php comments_template( '', true ); ?>
	</section>
	
<?php get_footer(); ?>