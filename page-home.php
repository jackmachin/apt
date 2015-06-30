<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
	<div id="content" class="wrapper">
		<div id="inner-content" class="container">

            <div id="main" class="main" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content home-content' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                        <?php the_content(); ?>
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
                <?php get_sidebar ();?>
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php get_footer(); ?>
