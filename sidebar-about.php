				<div id="sidebar-about" class="sidebar fourcol clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'about' ) ) : ?>

						<?php dynamic_sidebar( 'about' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>
