<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar2' ); ?>

	<?php else : ?>

		<?php
			/*
			 * This content shows up if there are no widgets defined in the backend.
			*/
		?>

		<div class="no-widgets">
			<p><?php esc_html_e( 'DESCARREGA JÁ A APP!', 'fitspiration' );  ?></p>
		</div>

	<?php endif; ?>

</div>