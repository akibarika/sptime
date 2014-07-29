<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php 
			if ( is_tag() )
			{
				echo wp_title('Tag:');
				if($paged > 1) printf(' - 第%s页',$paged);
				echo ' | ';
				bloginfo( 'name' );
			}
			elseif ( is_archive() )
			{
				echo wp_title('');
				if($paged > 1) printf(' - 第%s页',$paged);
				echo ' | ';
				bloginfo( 'name' );
			}
			elseif ( is_search() )
			{
				echo '&quot;'.wp_specialchars($s).'&quot;的搜索结果 | ';
				bloginfo( 'name' );
			}
			elseif ( is_home() )
			{
				bloginfo( 'name' );
				$paged = get_query_var('paged');
				if($paged > 1) printf(' - 第%s页',$paged);
			}
			elseif ( is_404() )
			{
				echo '页面不存在！ | ';
				bloginfo( 'name' );
			}
			else
			{
				echo wp_title( ' | ', false, right );
				bloginfo( 'name' );
			}
			?></title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<!--[if gte IE 9]><!-->
		<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<!--<![endif]-->
		<!--[if lt IE 9]>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/html5.js"></script>
		<![endif]-->
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider-min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/all.js"></script>

		<!-- style file -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css">
		
		<link rel="Shortcut Icon" href="<?php bloginfo('template_url'); ?>/favicon.ico"> 
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="application/rss+xml" title="RSS 1.0" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="ATOM 1.0" href="<?php bloginfo('atom_url'); ?>" />
		<?php wp_head(); ?> 
	</head>
	
	<body>
		<div id="page">
<!-- header starts here -->
			<header id="header">
				<div id="sp-logo" class="left">
					<a class="logo" href="<?php echo home_url(); ?>" title="SP-time"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></img></a>
				</div>
				<div id="info" class="right">
					<ul class="top-bar right">
						<li class="sp-social">
							<a class="weibo" href="http://weibo.com/sptime" target="_blank" title="新浪微博"><span>新浪</span></a>
							<a class="tx-weibo" href="http://e.t.qq.com/sp-time" target="_blank" title="腾讯微博"><span>腾讯</span></a>
							<a class="weixin" title="微信"><span>微信</span>
								<div class="QR">
									<img src="<?php bloginfo('template_directory'); ?>/img/qr.png">
								</div>
							</a>
						</li>
					</ul>			
					<div class="clear"></div>			
					<div class="induction right">SP-time Production Official Website <br/>
						<span class="right">中国原创游戏开发团队</span>
					</div>
					<div class="clear"></div>
					<nav id="navigation">
						<?php 
						wp_nav_menu(
							array
							(
								'theme_location' => 'menu',
								'container'=>'',
								'menu_id'=>'1st-menu',
								'items_wrap'=>'<div class="relative"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
							)
						); ?>					
					</nav>
				</div>
			</header> 
<?php
			wp_reset_query();
			if(!is_home() && !is_front_page())
			{
?>
			<div class="bannerwrapper"><div class="wraphack">
				<img class="banner" height="315" width="1920" src="<?php bloginfo('template_directory'); ?>/img/banner315.jpg" />
			</div></div>
<?php
			}
?>
<!-- header ends here			 -->
