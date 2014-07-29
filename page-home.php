<?php /* 
	  	Template Name: Home Page
	  */ ?>
<?php get_header(); ?>
<!-- home page slider -->
			<script language="javascript" type="text/javascript">
				// Can also be used with $(document).ready()
				$(window).load(function() {
					$('.main-slider').flexslider({
						animation: "slide",
						itemWidth: 1920,
						prevText: '',
						nextText: '',
					});
					$(window).resize(function(){
						$('.main-slider .flex-direction-nav').css('width',$('body').width());
					});
					$('.main-slider .flex-direction-nav').css('width',$('body').width());
				});
				$(window).load(function() {
				  // The slider being synced must be initialized first
				  $('#carousel').flexslider({
				    animation: "slide",
				    controlNav: false,
					slideshowSpeed: 5000,
				    itemWidth: 160,
					itemMargin: 18,
					directionNav: false,
					start: function(slider){
						$('#sliderarrows .arrows').bind('click touchend MSPointerUp keyup', function(event) {
							event.preventDefault();
							var target;
							target = $(this).attr('id')=='prevarrow' ? slider.getTarget('prev') : slider.getTarget('next');
							slider.flexAnimate(target, slider.vars.pauseOnAction);
						});
					}
				  });
				});
			</script>
            <?php query_posts(array('post_type'=>'slider_type'));
            if( have_posts() ) : ?>
			<section class="slides"><div class="bannerwrapper"><div class="wraphack">
		        <div class="flexslider main-slider">
					<ul class="slides">
                        <?php
                        while( have_posts() ) : the_post();
                        $image_url = get_post_meta($post->ID,'slider_pic',true);
                        $links_url = get_post_meta($post->ID,'sp_link',true);
                        if($image_url !='' && $links_url != ''){ ?>
							<li><a href="<?php echo $links_url; ?>"><img width="1920" height="550" src="<?php echo $image_url; ?>"></a></li>
                        <?php } endwhile; ?>
					</ul>
		        </div>			
			</div></div></section>
            <?php endif; wp_reset_query(); ?>
<!-- end of slider			 -->	
<!-- content here -->
			<section class="content">
				<div class="notice left">
					<div class="n-title">
						<div class="n-box right">
							<a href="<?php echo esc_url( get_category_link( 3 ) ); ?>">More</a>
						</div>
					</div>
					<div class="notices">
						<?php query_posts('showposts=1&category_name=news'); ?> 
						<?php while (have_posts()) : the_post(); ?>
						<article>
							<div class="title">
								<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							</div>
							<div class="notice-content">
								<?php //the_excerpt();
								the_content(); ?>
							</div>
						</article>
						<?php endwhile; wp_reset_query();?>
					</div>
					<div class="add-us">
						<div class="sp-social">
							<a class="weibo" href="http://weibo.com/sptime" target="_blank" title="新浪微博"><span>新浪</span></a>
							<a class="tx-weibo" href="http://e.t.qq.com/sp-time" target="_blank" title="腾讯微博"><span>腾讯</span></a>
							<a class="weixin" title="微信"><span>微信</span>
								<div class="QR">
									<img src="<?php bloginfo('template_directory'); ?>/img/qr.png">
								</div>
							</a>
						</div>					
					</div>
				</div>
				
				<div class="news left">
					<div class="n-title">
						<span>这个游戏试玩版还在拖延中</span>
					</div>		

					<div id="sliderarrows">
						<a id="prevarrow" class="arrows"><div id="prev"></div></a>
                        <?php query_posts(array('post_type'=>'game_slider_type'));
                        if( have_posts() ) : ?>
						<div id="carousel" class="flexslider ">
							<ul class="slides">
                                <?php
                                while( have_posts() ) : the_post();
                                $image_url = get_post_meta($post->ID,'slider_pic',true);
                                $links_url = get_post_meta($post->ID,'sp_link',true);
                                if($image_url !='' && $links_url != ''){ ?>
								<li><a href="<?php echo $links_url ?>"><img src="<?php echo $image_url ?>"></a><span><?php the_title(); ?></span></li>
                                <?php } endwhile; ?>
							</ul>
						</div>
                        <?php endif; wp_reset_query() ?>
						<a id="nextarrow" class="arrows"><div id="next"></div></a>
					</div>
					<div class="clear"></div>
				</div>
			</section>
			
<?php get_footer(); ?>