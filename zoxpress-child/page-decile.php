<?php
/* Template Name: Decile lo que quieras */
?>

<?php get_header(); ?>
    <div id="zox-home-main-wrap" class="zoxrel zox100">
        <div class="zox-body-width list">
            <div class="zox-post-top-wrap zoxrel left zox100 list-header">
                <div class=" container">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1 style="margin-top: 35px;" class="zox-post-title left entry-title titulo" itemprop="headline"><?php the_title(); ?></h1>
                        <small class="entry-description subtitulo"><p><?php the_content(); ?></p></small>
                    <?php endwhile; endif; ?>


                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $args = array(
                        'post_type'         => 'personaje',
                        'post_status'       => 'publish',
                        'posts_per_page'    => -1,
                        /*'meta_key'			=> 'posicion',
                        'orderby'			=> 'meta_value',
                        'order'				=> 'ASC',*/
                        'paged'             => $paged
                    );

                    $posts = new WP_Query( $args );

                    if ( $posts -> have_posts() ) :
                        while ( $posts -> have_posts() ) :
                            $posts->the_post();
                            ?>
                            <div class="decile-persona">
                                <div class="entry-thumbnail image-person">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( ); ?>
                                    </a>
                                </div>
                                <div class="entry-data">
                                    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"> <?php the_title( ); ?></a></h1>
                                    <div class="entry-description">
                                        <p><?php the_content(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Escribir</a>
                                        <a href="<?php the_permalink(); ?>" class="entry-icon-comment"><?php echo get_comments_number($posts->ID);?> Comentarios</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <div class="navigation-personage" >
                            <div class="btn-pers" ><?php previous_posts_link('Anterior', $posts->max_num_pages); ?></div>
                            <div class="btn-pers"><?php next_posts_link('Siguiente', $posts->max_num_pages); ?></div>
                        </div>
                    <?php
                        endif;
                        wp_reset_query();
                    ?>
                </div><!--zox-post-title-wrap-->
            </div><!--zox-post-top-wrap-->
        </div><!--zox-body-width-->
    </div><!--zox-home-main-wrap-->
<?php get_footer(); ?>