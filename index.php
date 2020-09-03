<?php get_header(); ?>

    <div id="primary" class="content-area">

        <div id="main" class="site-main" role="navigation">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header">
                    <h1>entry header</h1>
                </header>
                
                <div class="entry-content">
                    <p>entry desc</p>
                </div>

            </article>

        </div><!-- #main -->

        <h5>Index.php</h5>
    </div><!-- #primary -->

    <div class="site-secondary" id="secondary">
        <?php get_sidebar(); ?>
    </div> <!-- #primary -->

<?php get_footer(); ?>    