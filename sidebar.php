<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'main-sidebar'  )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div class="right sidebars">
<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>

	<?php dynamic_sidebar( 'main-sidebar' ); ?>

<?php endif; ?>		
</div>
