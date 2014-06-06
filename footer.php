			<hr class="line"></hr>
			<footer id="footer">
				<div class="foot-logo left"><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/logo_foot.gif"></a></div>
				<div class="search right">
					<form method="get" action="<?php bloginfo ('url');?>" role="search">
						<input type="text" name="s" class="text" value="" x-webkit-speech />
					</form>	
					<div class="go-up right"><a href=""></a></div>	
					<div class="clear"></div>
					<div class="lang right">网页语言</div>
					<div class="clear"></div>
					<div class="langs"><?php wpcc_output_navi(); ?></div>
							
				</div>
				<div class="clear"></div>
				<hr class="in-line"></hr>
				<div class="copy">
					<b>copy right here</b>
				</div>
			</footer>
<!-- content ends here			 -->
		</div>
	<?php wp_footer(); ?>
	</body>
	
</html>