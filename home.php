<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="navigation">
            <?php if (have_posts() ) : while (have_posts() ) : the_post();
                
                get_template_part( 'template-parts/content', get_post_format());
             
             endwhile;  else : ?>          
                
                <?php get_template_part( 'template-parts/content', 'none' );
            
            endif; ?>

            <?php echo paginate_links(); ?>

        </main><!-- #main -->

        <h5>template: Home.php (for homepage (blog page))</h5>
    </div><!-- #primary -->
    
    <!-- secondary -->
    <?php get_sidebar(); ?>
    <!-- #secondary -->
    
     
   
<?php get_footer(); ?>    