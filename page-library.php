<?php
/*
Template Name: Library
*/
?>
<?php get_header(); ?>
	<div id="content">

		<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol first clearfix" role="main">
								<?php if (is_user_logged_in()) { ?>
									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

										<header class="article-header">
                      <h2><?php the_title ();?></h2>
										</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									        <div id="SelectContainer">
                  <?php

// check if the repeater field has rows of data
if( have_rows('section') ):

 	// loop through the rows of data
    while ( have_rows('section') ) : the_row(); ?>

        <a class="button <?php the_sub_field ('class_w');?>  <?php the_sub_field ('class_p');?>" onclick="selectThis('<?php the_sub_field ('id');?>')" href="javascript:void(0)"><?php the_sub_field('heading');?></a>

    <?php endwhile;

else :

    // no rows found

endif;

// check if the repeater field has rows of data
?>         <div class="TextBodyContainer">
<?php if( have_rows('section') ):

 	// loop through the rows of data
    while ( have_rows('section') ) : the_row(); ?>

<div class="TextContainer" id="Body_<?php the_sub_field ('id');?>">
<?php the_sub_field ('content');?>
</div>

    <?php endwhile;

else :

    // no rows found

endif;

?>
</div>
      </div>
								</section> <!-- end article section -->
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
