<?php /* 
	  	Template Name: Home Page
	  */ ?>
<?php get_header(); ?>	
<!-- content here -->
			<section class="content">
				<div class="notice left">
					<div class="n-title">
						<div class="n-box right">
							<span>More</span>
						</div>
					</div>
					<?php query_posts('showposts=1&category_name=news'); ?> 
					<?php while (have_posts()) : the_post(); ?>
					<div class="title">
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</div>
					<div class="notice-content">
						<?php the_excerpt(); ?>
					</div>
					<?php endwhile;?> 
					<ul class="add-us">
						<li class="sp-social">
							<a class="weibo" href="1" target="_blank" title="新浪微博"><span>新浪</span></a>
							<a class="tx-weibo" href="2" target="_blank" title="腾讯微博"><span>腾讯</span></a>
							<a class="weixin" href="3" target="_blank" title="微信"><span>微信</span>
								<div class="QR">
									<img src="<?php bloginfo('template_directory'); ?>/img/qr.gif">
								</div>
							</a>
						</li>					
					</ul>
				</div>
				
				<div class="news left">
					<div class="n-title">
						<div class="n-box">
							<span>这个游戏试玩版还在拖延中</span>
						</div>
					</div>		

					<div id="carousel" class="flexslider">
						<ul class="slides">
							<li><a href="1"><img src="<?php bloginfo('template_directory'); ?>/games/works1.png"></a><span>1</span></li>
							<li><a href="2"><img src="<?php bloginfo('template_directory'); ?>/games/works2.png"></a><span>2</span></li>	
							<li><a href="3"><img src="<?php bloginfo('template_directory'); ?>/games/works3.png"></a><span>3</span></li>
							<li><a href="4"><img src="<?php bloginfo('template_directory'); ?>/games/works4.png"></a><span>4</span></li>
							<li><a href="5"><img src="<?php bloginfo('template_directory'); ?>/games/works5.png"></a><span>5</span></li>


				</div>
				<div class="clear">
				</div>
			</section>
			
<?php get_footer(); ?>