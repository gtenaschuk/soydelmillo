<?php get_header(); ?>
    <div id="zox-home-main-wrap" class="zoxrel zox100">
        <div class="zox-body-width list">
            <div class="zox-post-top-wrap zoxrel left zox100 list-header">
                <div class=" container">

                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        ?>
                        <small class="entry-description subtitulo"><p>Decile lo que quieras</p></small>
                        <h1 class="zox-post-title left entry-title titulo" itemprop="headline"><?php the_title(); ?></h1>

                    <?php endwhile; endif; ?>

                    <div class="decile-persona single">
                        <div class="entry-thumbnail image-person-single">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="entry-data">
                            <div class="entry-description">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="entry-new-comments">
                            <ul class="entry-new-comments-tabs">
                                <li class="active">Mensaje personal</li>
                            </ul>
                            <div class="entry-new-comments-tabs-cont">

                                <?php
                                $commenter = wp_get_current_commenter();
                                $fields =  array(
                                    'author' => '<div class="parte1"><div class="form-group"> <div> <label for="author">' . esc_html__('Nombre') . '<span class="required">*</span> </label> </div> <input name="author" id="author" value="' . esc_attr($commenter['comment_author']) . '" type="text" class="form-input" required> </div>',
                                    'email' => '<div class="form-group"> <div> <label for="email">' . esc_html__('Email') . ' <span class="required">*</span> </label> </div> <input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" class="form-input" required> </div>',
                                    'check'  => '<div class="form_check"><div class="check"><label>' . esc_html__('Mostrar correo') . '</label></div><input type="checkbox" name="check" id="check"></div>',
                                );

                                // Custom settings for the wp_editor
                                $editor_settings = array(
                                    'textarea_name' => 'comment', // Important to match the name of the textarea
                                    'textarea_rows' => 5,
                                    'teeny'         => true, // Simplified editor
                                    'quicktags'     => false, // Disable HTML tags
                                    'media_buttons' => false, // Disable media buttons
                                    'tinymce'       => array(
                                        'toolbar1' => 'bold italic underline', // Only bold, italic, and underline buttons
                                        'menubar'  => false, // Remove the top menubar
                                    ),
                                );

                                // Add the WYSIWYG editor for comments
                                ob_start();
                                wp_editor('', 'comment', $editor_settings);
                                $comment_field = ob_get_clean();

                                // Agrega el campo oculto de reCAPTCHA al final del campo de comentarios.
                                $comment_field .= '<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">';

                                // Configura los argumentos del formulario de comentarios.
                                $comments_args = array(
                                    'fields' => $fields,
                                    'comment_field' => $comment_field,
                                    'submit_button' => '<div class="form-group"> <button name="submit" type="submit" id="submit" class="btn btn-primary">ENVIAR</button> </div>'
                                );

                                comment_form($comments_args);
                                ?>

                            </div>

                            <div class="social-share">
                                <p>Comparte en:</p>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&quote=<?php echo urlencode('Decile lo que quieras - ' . get_the_title()); ?>" target="_blank" class="social-button facebook">
                                    <i class="fab fa-facebook-f"></i> Facebook
                                </a>

                                <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode('Decile lo que quieras - ' . get_the_title()); ?>&url=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="social-button twitter">
                                    <i class="fab fa-twitter"></i> Twitter
                                </a>

                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode('Decile lo que quieras - ' . get_the_title()); ?>" target="_blank" class="social-button linkedin">
                                    <i class="fab fa-linkedin-in"></i> LinkedIn
                                </a>

                                <a href="https://api.whatsapp.com/send?text=<?php echo urlencode('Decile lo que quieras - ' . get_the_title() . ' ' . get_permalink()); ?>" target="_blank" class="social-button whatsapp">
                                    <i class="fab fa-whatsapp"></i> WhatsApp
                                </a>
                            </div>
							
							</div>

                        </div>
                        </div>




                    <div class="decile-comments entry-comments">
                        <?php
                        // Configuración de la paginación
                        $paged = ( get_query_var( 'cpage' ) ) ? get_query_var( 'cpage' ) : 1;

                        // Obtener los comentarios aprobados para el post actual
                        $comments = get_comments( array(
                            'status'  => 'approve',
                            'post_id' => get_the_ID(),
                            'paged'   => $paged, // Página actual
                            'number'  => 6, // Número de comentarios por página
                        ) );

                        // Verificar si hay comentarios
                        if ( $comments ) :
                            foreach ( $comments as $comment ) : ?>
                                <div class="entry-comments-single">
                                    <div class="entry-comments-single-header">
                                        <div class="entry-comments-single-header-author">
                                            <img src="<?php echo esc_url('https://elaconquija.com/wp-content/uploads/2020/09/conversation.png'); ?>" width="18px" alt="">
                                            <?php echo '<strong>' . esc_html( $comment->comment_author ) . '</strong>'; ?>
                                        </div>

                                        <div class="entry-comments-single-header-date">
                                            <?php if ( get_comment_meta( $comment->comment_ID , 'check', true ) ) : ?>
                                                <br><span> <?php echo esc_html( $comment->comment_author_email ); ?></span>
                                            <?php endif; ?>

                                            <?php
                                            // Mostrar la fecha en formato humanizado
                                            $time_diff = human_time_diff( strtotime( $comment->comment_date_gmt ), current_time( 'timestamp', 1 ) );
                                            echo sprintf(
                                                '<small>Publicado hace %s</small> <time datetime="%s">%s</time>',
                                                esc_html( $time_diff ),
                                                esc_attr( get_comment_time( 'c', true, $comment ) ), // Formato ISO 8601 para SEO
                                                esc_html( date_i18n( get_option( 'date_format' ), strtotime( $comment->comment_date_gmt ) ) ) // Fecha completa
                                            );
                                            ?>
                                        </div>
                                    </div>

                                    <div class="entry-comments-single-body">
                                        <?php comment_text( $comment->comment_ID ); ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>




                            <!-- Paginación manual -->
                            <div class="navigation">

						        <div class="btn-back">
                                    <a href="https://salta4400.com/decile/" class="btn btn-primary">Volver al listado</a>
                                </div><!--btn-back-->
						

                                <div class="nav">

                                    <?php
                                    // Configuración de los enlaces de paginación
                                    $total_comments = get_comments( array(
                                        'status'  => 'approve',
                                        'post_id' => get_the_ID(),
                                        'count'   => true, // Solo contar el número de comentarios
                                    ) );

                                    $total_pages = ceil( $total_comments / 6 ); // Asumiendo 6 comentarios por página

                                    if ( $total_pages > 1 ) :
                                        $current_page = max( 1, get_query_var( 'cpage' ) );

                                        // Mostrar los enlaces de paginación
                                        echo paginate_links( array(
                                            'base'      => add_query_arg( 'cpage', '%#%' ),
                                            'format'    => '?cpage=%#%',
                                            'current'   => $current_page,
                                            'total'     => $total_pages,
                                            'prev_text' => __( 'Anterior', 'text_domain' ),
                                            'next_text' => __( 'Siguiente', 'text_domain' ),
                                        ) );
                                    endif;
                                    ?>

                                </div>
                                </div>


                        <?php else : ?>
                            <h2 class="zox-post-title left entry-title titulo" itemprop="headline">No se han realizado comentarios.</h2>
						
								<div class="btn-back">
                                    <a href="https://salta4400.com/decile/" class="btn btn-primary">Volver al listado</a>
                                </div><!--btn-back-->
						
                        <?php endif; ?>


                    </div>




                    </div>
                </div><!--zox-post-title-wrap-->

            </div><!--zox-post-top-wrap-->
        </div><!--zox-body-width-->
    </div><!--zox-home-main-wrap-->
<?php get_footer(); ?>