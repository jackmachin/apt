<?php get_header(); ?>
    <div id="content">
        <div id="inner-content">
            <div id="main" role="main">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                    <header class="article-header">
                        <div class="wrapper">
                           <div class="container">
                            <h1 class="page-title"><?php the_title(); ?></h1>
                            </div>
                        </div>
                    </header>
                    <div class="wrapper">
                        <div class="container">
                            <div class="entry-content main">
                                <?php the_content(); ?>
                            </div>
                            <?php get_sidebar();?>
                        </div>
                    </div>
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
        </div> <!-- end #inner-content -->
    </div> <!-- end #content -->
<?php get_footer(); ?>
