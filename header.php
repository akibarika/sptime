<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php if ( is_tag() ) { echo wp_title('Tag:');if($paged > 1) printf(' - 第%s页',$paged);echo ' | '; bloginfo( 'name' );} elseif ( is_archive() ) {echo wp_title('');  if($paged > 1) printf(' - 第%s页',$paged);    echo ' | ';    bloginfo( 'name' );} elseif ( is_search() ) {echo '&quot;'.wp_specialchars($s).'&quot;的搜索结果 | '; bloginfo( 'name' );} elseif ( is_home() ) {bloginfo( 'name' );$paged = get_query_var('paged'); if($paged > 1) printf(' - 第%s页',$paged);}  elseif ( is_404() ) {echo '页面不存在！ | '; bloginfo( 'name' );} else {echo wp_title( ' | ', false, right )  ; bloginfo( 'name' );} ?></title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Rika Akiba">
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider-min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/all.js"></script>

		<!-- style file -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
		
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
				<div class="sp-wrap">
					<div class="sp-table">
						<div id="sp-logo" class="left">
							<a class="logo" href="" target="_blank" title="SP-time"><img src
							="<?php bloginfo('template_directory'); ?>/img/logo.png"></img></a>
						</div>
						<div id="info" class="right">
							<ul class="top-bar right">
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
							<div class="clear"></div>			
							<div class="induction right">SP-time Production Official Website <br/>
								<span class="right">中国原创游戏开发团队</span>
							</div>
							<div class="clear"></div>
							<nav id="navigation">
								<?php  wp_nav_menu( array( 'theme_location' => 'menu' ,'container'=>'','menu_id'=>'1st-menu') ); ?>							
							</nav>
						</div>
					</div>
				</div>			 
			</header>
<!-- header ends here			 -->
<!-- home page slider -->
			<script language="javascript" type="text/javascript">
				// Can also be used with $(document).ready()
				$(window).load(function() {
				  $('.mian-slider').flexslider({
				    animation: "slide"
				  });
				});
				$(window).load(function() {
				  // The slider being synced must be initialized first
				  $('#carousel').flexslider({
				    animation: "slide",
				    controlNav: false,
				    animationLoop: false,
				    slideshow: false,
				    itemWidth: 180,
				    itemMargin: 5,
				    asNavFor: '#slider'
				  });
				   
				  $('#slider').flexslider({
				    animation: "slide",
				    controlNav: false,
				    animationLoop: false,
				    slideshow: false,
				    sync: "#carousel"
				  });
				});				
			</script>			
			<section class="slides">
		        <div class="flexslider mian-slider">
					<ul class="slides">
							<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/banner550.jpg"></a></li>
							<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/banner550.jpg"></a></li>
					</ul>
		        </div>			
			</section>
<!-- end of slider			 -->		