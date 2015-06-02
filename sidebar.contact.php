				<div id="sidebar-contact" class="sidebar fourcol lasst clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar-contact' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar-contact' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>
