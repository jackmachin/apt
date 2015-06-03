<?php
/*
Template Name: Member
*/
?>
<?php get_header(); ?>
	<div id="content">
		<div id="inner-content">
            <div id="main" class="main" role="main">
                <?php if (is_user_logged_in()) { ?>
									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
										<div class="entry-content clearfix" itemprop="articleBody">
											<?php the_content(); ?>
                                        </div > <!-- end article section -->
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
								<?php ;} else { ?>
										<h1>Restricted Page</h1>
										<p>If you are an independent financial advisor and would like to access the restricted page, please log in or follow the registration link below.</p>
									<p>Not yet registered? <a href="http://amberpensiontrust.co.uk/register/">Click here</a></p>
									<?php jack_is_awesome(); ?>

								<?php ;} ?>
						</div> <!-- end #main -->
						<?php// if (is_page ('home')) get_sidebar('home'); ?>
						<?php// if (is_page ('how-the-amber-wrap-works')) get_sidebar('works'); ?>
						<?php// if (is_page ('about-us')) get_sidebar('about'); ?>
				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
