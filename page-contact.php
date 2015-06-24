<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
	<div id="content" class="wrapper">
		<div id="inner-content" class="container">
            <div id="main" class="main" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<div class="entry-content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
                        </div> <!-- end article section -->
						<?php comments_template(); ?>
					</article> <!-- end article -->
					<?php endwhile; else : ?>
							<article id="post-not-found" class="hentry clearfix">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>
					<?php endif; ?>
				</div> <!-- end #main -->
                <div class="map-container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1190.0152613413861!2d-2.224257650000014!3d53.37850335000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb2c8db923f61%3A0xac49b91f1ca902fb!2sCheadle+SK8+3GX!5e0!3m2!1sen!2suk!4v1435149349367" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php get_footer(); ?>
