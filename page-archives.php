<?php
/**
* The template for displaying archive pages.
*
* @package QOD_Starter_Theme
*/

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


            <header class="page-header">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                ?>
            </header><!-- .page-header -->

            <div class="post-archives">
                <h2>Quote Authors</h2>
                <ul>
                    <?php
                $posts = get_posts( 'posts_per_page=-1' );
                foreach ( $posts as $post ) : setup_postdata( $post );
                ?>

            <li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
        <?php endforeach; wp_reset_postdata(); ?>
            </ul>
            </div>

            <div class="categories-archives">
                <h2>Categories</h2>
                <ul>
                <li><?php wp_list_categories( array(
                    'title_li' => ''))?></li>
                </ul>
            </div>

            <div class="tag-archives">
                <h2>Tags</h2>
               
                <?php wp_tag_cloud( array(
                    'smallest' => 1.25,
                    'largest' => 1.25,
                    'unit' => 'rem',
                    'format' => 'list'
                     )) ?>
                
            </div>





        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>