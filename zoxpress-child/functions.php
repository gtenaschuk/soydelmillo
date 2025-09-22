<?php
function zox_child_enqueue_styles() {

    $parent_style = 'zox-custom-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'fontawesome-child', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
    wp_enqueue_style( 'zox-custom-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'zox_child_enqueue_styles' );




// Register Custom Post Type "personaje"
function create_personaje_cpt() {

    $labels = array(
        'name'                  => _x( 'Personajes', 'Post Type General Name', 'elaconquija-domain' ),
        'singular_name'         => _x( 'Personaje', 'Post Type Singular Name', 'elaconquija-domain' ),
        'menu_name'             => _x( 'Personajes', 'Admin Menu text', 'elaconquija-domain' ),
        'name_admin_bar'        => _x( 'Personaje', 'Add New on Toolbar', 'elaconquija-domain' ),
        'archives'              => __( 'Archivos Personaje', 'elaconquija-domain' ),
        'attributes'            => __( 'Atributos Personaje', 'elaconquija-domain' ),
        'parent_item_colon'     => __( 'Padre Personaje:', 'elaconquija-domain' ),
        'all_items'             => __( 'Todos los Personajes', 'elaconquija-domain' ),
        'add_new_item'          => __( 'Añadir Nuevo Personaje', 'elaconquija-domain' ),
        'add_new'               => __( 'Añadir Nuevo', 'elaconquija-domain' ),
        'new_item'              => __( 'Nuevo Personaje', 'elaconquija-domain' ),
        'edit_item'             => __( 'Editar Personaje', 'elaconquija-domain' ),
        'update_item'           => __( 'Actualizar Personaje', 'elaconquija-domain' ),
        'view_item'             => __( 'Ver Personaje', 'elaconquija-domain' ),
        'view_items'            => __( 'Ver Personajes', 'elaconquija-domain' ),
        'search_items'          => __( 'Buscar Personaje', 'elaconquija-domain' ),
        'not_found'             => __( 'No se encontraron personajes.', 'elaconquija-domain' ),
        'not_found_in_trash'    => __( 'No se encontraron personajes en la papelera.', 'elaconquija-domain' ),
        'featured_image'        => __( 'Imagen Destacada', 'elaconquija-domain' ),
        'set_featured_image'    => __( 'Establecer Imagen Destacada', 'elaconquija-domain' ),
        'remove_featured_image' => __( 'Eliminar Imagen Destacada', 'elaconquija-domain' ),
        'use_featured_image'    => __( 'Usar como Imagen Destacada', 'elaconquija-domain' ),
        'insert_into_item'      => __( 'Insertar en el Personaje', 'elaconquija-domain' ),
        'uploaded_to_this_item' => __( 'Subido a este Personaje', 'elaconquija-domain' ),
        'items_list'            => __( 'Lista de Personajes', 'elaconquija-domain' ),
        'items_list_navigation' => __( 'Navegación de la Lista de Personajes', 'elaconquija-domain' ),
        'filter_items_list'     => __( 'Filtrar Lista de Personajes', 'elaconquija-domain' ),
    );

    $args = array(
        'label'                 => __( 'Personaje', 'elaconquija-domain' ),
        'description'           => __( 'Personajes para decir lo que quieras', 'elaconquija-domain' ),
        'labels'                => $labels,
        'menu_icon'             => 'dashicons-businessman',
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author', 'comments' ),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'hierarchical'          => false,
        'exclude_from_search'   => false,
        'show_in_rest'          => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'personaje', $args );
}
add_action( 'init', 'create_personaje_cpt', 0 );

// Shortcode function
function decile_shortcode() {
    $html = '
		<section class="section-decile">
			<div class="grid-container">
				<div class="container-title-decile">
				    <h2 class="title-decile">DECILE LO QUE QUIERAS</h2>
                </div>
                <span class="line"></span>
				<div class="thumbnail-decile">
					<a class="link-cont" href="https://salta4400.com/decile/">
						<img src="https://salta4400.com/wp-content/uploads/2021/04/gustavo-saez-e1619570496764-1.jpeg" alt="decile-thumbnail">
					</a>
				</div>
				<div class="name-decile">
					<a href="https://salta4400.com/decile/">
						<h3>Gustavo Sáenz, Gobernador de la provincia de Salta</h3>
					</a>
				</div>
				<div class="description-decile">
					<a href="https://salta4400.com/decile/">
						<p class="desc">
							¿Qué es “Decile lo que quieras”?  
							Es un espacio de libertad para que puedas expresarte con el mayor de los respetos a tus gobernantes. Puedes pedirle lo que necesites, darle un consejo, denunciar alguna injusticia o simplemente felicitarlo. Nosotros nos encargamos que llegue a destino.
						</p>
					</a>
				</div>
				<div class="btn-decile">
					<a href="https://salta4400.com/decile/">
						<h3>COMENTA AHORA</h3> 
					</a>
				</div>
			</div>
	    </section>
	';
    return $html;
}
add_shortcode( 'decile_lo_que_quieras', 'decile_shortcode' );



// Shortcode function
function decile_preview_shortcode() {
    // Texto introductorio
    $intro_text = '<div class="decile-intro">';
    $intro_text .= '<h2>¿Qué es “Decile lo que quieras”?</h2>';
    $intro_text .= '<p>Es un espacio de libertad para que puedas expresarte con el mayor de los respetos a tus gobernantes. </p>';
    $intro_text .= '<p>Puedes pedirle lo que necesites, darle un consejo, denunciar alguna injusticia o simplemente felicitarlo. Nosotros nos encargamos que llegue a destino.</p>';

    // CTA
    $intro_text .= '<a href="/decile" class="btn btn-primary">Comenta ahora</a>';

    $intro_text .= '</div>';

    // Obtener la vista previa del personaje más reciente
    $args = array(
        'post_type'      => 'personaje', // Cambia 'personaje' si tu CPT tiene otro nombre
        'posts_per_page' => 1,
        'orderby'        => 'rand',
        'order'          => 'DESC'
    );
    $recent_personaje = new WP_Query($args);



    if ($recent_personaje->have_posts()) {
        while ($recent_personaje->have_posts()) {
            $recent_personaje->the_post();

            // Obtener ID
            $post_id = get_the_ID();

            // Obtener la imagen destacada (thumbnail)
            $thumbnail = get_the_post_thumbnail(get_the_ID(), 'full'); // Cambia 'full' según el tamaño de la imagen que necesites
            $title = get_the_title();
            $link = get_permalink();
            $comments_number = get_comments_number(get_the_ID());
            $comments_text = $comments_number > 0 ? $comments_number . ' Comentarios' : 'No hay comentarios';

            // Añadir los comentarios recientes en un carousel
            $comments_carousel = get_recent_comments_carousel($post_id);

            // Construcción del HTML
            $output = '<div class="decile-preview-widget">';
            $output .= '<div class="entry-data">';

            // Añadir el thumbnail antes del título
            if ($thumbnail) {
                $output .= '<div class="entry-thumbnail">';
                $output .= '<a href="' . esc_url($link) . '">'; // Enlace alrededor del thumbnail
                $output .= $thumbnail; // Mostrar la imagen destacada
                $output .= '</a>';
                $output .= '</div>'; // .entry-thumbnail
            }

            $output .= '<h1 class="entry-title"><a href="' . esc_url($link) . '">' . esc_html($title) . '</a></h1>';

            $output .= '<div class="entry-description">';
            $output .= '<p>' . get_the_excerpt() . '</p>'; // Muestra un extracto del contenido

            // Ver Todos
            $output .= '<a href="' . esc_url('/decile') . '" class="btn btn-primary">Ver todos</a>';

            $output .= '<a href="' . esc_url($link) . '" class="btn btn-primary">Escribir</a>';
            $output .= '<a href="' . esc_url($link) . '" class="entry-icon-comment">' . esc_html($comments_text) . '</a>';
            $output .= '</div>'; // .entry-description

            // Añadir el carrusel de comentarios
            $output .= $comments_carousel;

            $output .= '</div>'; // .entry-data



            $output .= '</div>'; // .decile-preview-widget
        }
        wp_reset_postdata();
    } else {
        $output = ''; // No mostrar nada si no hay personajes
    }

    // Call to action para ir al listado completo con un nuevo texto
    $cta = '<div class="decile-cta">';
    $cta .= '<a href="/decile" class="btn btn-secondary">Decile lo que quieras</a>';
    $cta .= '</div>';

    // Devolver el texto introductorio, el contenido del personaje más reciente, el CTA y el carousel de comentarios
    return $intro_text . $output;
}
add_shortcode('decile_preview', 'decile_preview_shortcode');




function get_recent_comments_carousel($post_id) {
    // Obtener los 5 comentarios más recientes del sitio
    $comments = get_comments(array(
        'number' => 5, // Número de comentarios
        'status' => 'approve',
        'post_id' => $post_id, // Especificar el ID del post actual (personaje)
        'orderby' => 'comment_date', // Ordenar por fecha de comentario
        'order' => 'DESC' // Los más recientes primero
    ));

    // Verificar si hay comentarios
    if ($comments) {
        $output = '<div class="recent-comments-carousel">';
        foreach ($comments as $comment) {
            $output .= '<div class="carousel-comment">';

            $output .= '<div class="comment-thumbnail">';

            // Autor del comentario
            $output .= '<div class="comment-author">';
            $output .= '<strong>' . esc_html($comment->comment_author) . '</strong>';
            $output .= '</div>'; // .comment-author

            // Fecha del comentario
            $output .= '<div class="comment-date">';
            $output .= '<small>' . esc_html(date_i18n(get_option('date_format'), strtotime($comment->comment_date))) . '</small>';
            $output .= '</div>'; // .comment-date

            $output .= '</div>'; // .comment-thumbnail

            // Contenido del comentario
            $output .= '<div class="comment-content">';
            $output .= '<p>' . esc_html(wp_trim_words($comment->comment_content, 25)) . '</p>'; // Limitamos a 25 palabras
            $output .= '</div>'; // .comment-content

            $output .= '</div>'; // .carousel-comment
        }
        $output .= '</div>'; // .recent-comments-carousel
    } else {
        $output = '<p>No hay comentarios recientes.</p>';
    }

    return $output;
}
add_shortcode('recent_comments_carousel', 'get_recent_comments_carousel');




// Automatically approve comments for "personaje" post type
add_action( 'wp_insert_comment', 'auto_approve_personaje_comment', 99, 2 );

function auto_approve_personaje_comment( $comment_id, $comment_object ) {
    if ( 'personaje' === get_post_type( $comment_object->comment_post_ID ) ) {
        wp_update_comment( array(
            'comment_ID' => $comment_id,
            'comment_approved' => 1,
        ));
    }
}

// Save custom meta data for comments
function save_comment_meta_checkbox( $comment_id ) {
    $checked_value = isset( $_POST['check'] ) && $_POST['check'] === 'on' ? true : false;
    add_comment_meta( $comment_id, 'check', $checked_value, true );
}
add_action( 'comment_post', 'save_comment_meta_checkbox', 1 );

// Add custom column to the comments list in admin
function add_custom_comments_columns( $columns ) {
    $columns['check_publicreview_column_cb'] = 'Mostrar Email';
    return $columns;
}
add_filter( 'manage_edit-comments_columns', 'add_custom_comments_columns' );

// Output the custom column data
function custom_comments_column_data( $column, $comment_id ) {
    if ( 'check_publicreview_column_cb' === $column ) {
        echo get_comment_meta( $comment_id, 'check', true ) ? 'Sí' : 'No';
    }
}
add_action( 'manage_comments_custom_column', 'custom_comments_column_data', 10, 2 );

// Enqueue scripts for ads based on page type and device
function control_ads() {
    wp_enqueue_script( 'GPT-ADS', 'https://securepubads.g.doubleclick.net/tag/js/gpt.js' );

    if ( is_front_page() ) {
        wp_enqueue_script( wp_is_mobile() ? 'GPT-Home' : 'GPT-HomeD', get_stylesheet_directory_uri() . ( wp_is_mobile() ? '/js/GPTHome.js' : '/js/GPTHDesktop.js' ) );
    } elseif ( is_single() && get_post_type() === 'post' ) {
        wp_enqueue_script( wp_is_mobile() ? 'GPT-Single' : 'GPT-SingleD', get_stylesheet_directory_uri() . ( wp_is_mobile() ? '/js/GPTSingle.js' : '/js/GPTSDesktop.js' ) );
    } elseif ( is_category() ) {
        wp_enqueue_script( wp_is_mobile() ? 'GPT-Category' : 'GPT-CategoryD', get_stylesheet_directory_uri() . ( wp_is_mobile() ? '/js/GPTCategory.js' : '/js/GPTCDesktop.js' ) );
    }
}
//add_action( 'wp_head', 'control_ads' );


// Filter to remove empty <p> tags
function remove_empty_p( $content ) {
    // Remove <p> tags that contain only whitespace or are completely empty
    return preg_replace( '/<p>\s*<\/p>/i', '', $content );
}
add_filter( 'comment_text', 'remove_empty_p' );
add_filter( 'the_content', 'remove_empty_p' ); // Optional: if you want this in posts too


// Remove empty <p> tags before saving the comment
function remove_empty_p_before_saving_comment( $commentdata ) {
    if ( isset( $commentdata['comment_content'] ) ) {
        // Remove empty <p> tags, including those with spaces
        $commentdata['comment_content'] = preg_replace( '/<p>(\s|&nbsp;)*<\/p>/i', '', $commentdata['comment_content'] );
    }
    return $commentdata;
}
add_filter( 'preprocess_comment', 'remove_empty_p_before_saving_comment' );


/*
 * Comment callback
 */

function decile_comment_callback($comment, $args, $depth) {
    // Definir las clases CSS adicionales según la profundidad del comentario (respuestas a otros comentarios)
    $comment_class = ( $depth > 1 ) ? 'child-comment' : 'parent-comment';
    ?>
    <div class="entry-comments-single <?php echo esc_attr( $comment_class ); ?>" id="comment-<?php comment_ID(); ?>">

        <!-- Cabecera del comentario (autor, fecha, etc.) -->
        <div class="entry-comments-single-header">

            <!-- Autor del comentario con icono -->
            <div class="entry-comments-single-header-author">
                <img src="<?php echo esc_url('https://elaconquija.com/wp-content/uploads/2020/09/conversation.png'); ?>" width="18px" alt="Icono conversación">
                <?php echo '<strong>' . get_comment_author() . '</strong>'; ?>
            </div>

            <!-- Fecha del comentario y email si está marcado -->
            <div class="entry-comments-single-header-date">

                <!-- Mostrar email si está activada la opción 'check' en los metadatos del comentario -->
                <?php if ( get_comment_meta( get_comment_ID(), 'check', true ) ) : ?>
                    <br><span><?php echo esc_html( get_comment_author_email() ); ?></span>
                <?php endif; ?>

                <!-- Fecha en formato humanizado -->
                <?php
                $time_diff = human_time_diff( strtotime( get_comment_time('Y-m-d H:i:s') ), current_time( 'timestamp' ) );
                echo sprintf(
                    '<small>Publicado hace %s</small> <time datetime="%s">%s</time>',
                    esc_html( $time_diff ),
                    esc_attr( get_comment_time( 'c' ) ), // Formato ISO 8601 para SEO
                    esc_html( date_i18n( get_option( 'date_format' ), strtotime( get_comment_time('Y-m-d H:i:s') ) ) ) // Fecha completa
                );
                ?>
            </div>
        </div>

        <!-- Contenido del comentario -->
        <div class="entry-comments-single-body">
            <?php comment_text(); ?>
        </div>

        <!-- Añadir enlace para responder al comentario si está habilitado -->
        <?php
        comment_reply_link( array_merge( $args, array(
            'depth'     => $depth,
            'max_depth' => $args['max_depth'],
            'before'    => '<div class="reply">',
            'after'     => '</div>',
        ) ) );
        ?>
    </div>
    <?php
}



function enqueue_child_theme_assets() {
    // Encolar el estilo de Slick (CDN)
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
    wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1');

    // Encolar el script de Slick (CDN)
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);

    // Encolar tu archivo JS personalizado de la carpeta assets/js en tu tema hijo
    wp_enqueue_script('slick-init', get_stylesheet_directory_uri() . '/assets/js/slick-init.js', array('jquery', 'slick-js'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_assets');


function redirect_personaje_archive_to_decile() {
    if (is_post_type_archive('personaje')) {
        wp_redirect(home_url('/decile'), 301); // Redirigir a /decile
        exit;
    }
}
add_action('template_redirect', 'redirect_personaje_archive_to_decile');


function add_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'add_font_awesome');


// Add honeypot
function add_honeypot_field() {
    echo '<p style="display:none;" aria-hidden="true">';
    echo '<label for="honeypot">Leave this field empty</label>';
    echo '<input type="text" name="honeypot" id="honeypot" value="" />';
    echo '</p>';
}
add_action('comment_form', 'add_honeypot_field');

// Verify Honeypot
function verify_honeypot_field($commentdata) {
    if (!empty($_POST['honeypot'])) {
        wp_die('Error: It seems you are a bot. Your comment has been rejected.');
    }
    return $commentdata;
}
add_filter('preprocess_comment', 'verify_honeypot_field');


/*
 * Recaptcha
 */

function enqueue_recaptcha_script() {
    // Usar la clave definida en wp-config.php.
    $site_key = RECAPTCHA_SITE_KEY;

    wp_enqueue_script(
        'google-recaptcha',
        'https://www.google.com/recaptcha/api.js?render=' . $site_key . '&cookieflags=samesite=none;secure',
        [],
        null,
        true // Cargar en el footer
    );

    wp_add_inline_script(
        'google-recaptcha',
        "grecaptcha.ready(function() {
            grecaptcha.execute('{$site_key}', {action: 'submit'}).then(function(token) {
                var recaptchaField = document.getElementById('g-recaptcha-response');
                if (recaptchaField) {
                    recaptchaField.value = token;
                }
            });
        });"
    );
}
add_action('wp_enqueue_scripts', 'enqueue_recaptcha_script');

function validate_recaptcha_on_comment($commentdata) {
    $recaptcha_token = $_POST['g-recaptcha-response'] ?? '';
    $recaptcha_secret = RECAPTCHA_SECRET_KEY; // Usar la clave definida en wp-config.php.

    // Verificar si el token está vacío.
    if (empty($recaptcha_token)) {
        wp_die('Error: No se detectó reCAPTCHA. Por favor, inténtalo de nuevo.');
    }

    // Validar el token con la API de Google.
    $response = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', [
        'body' => [
            'secret' => $recaptcha_secret,
            'response' => $recaptcha_token,
        ],
    ]);

    // Procesar la respuesta de la API.
    $result = json_decode(wp_remote_retrieve_body($response), true);

    // Verificar si la respuesta de la API es válida.
    if (empty($result['success']) || !$result['success']) {
        wp_die('Error: Falló la validación de reCAPTCHA. Por favor, inténtalo de nuevo.');
    }

    // Validar el puntaje mínimo.
    if (!isset($result['score']) || $result['score'] < 0.5) {
        wp_die('Error: El puntaje de reCAPTCHA indica actividad sospechosa. Por favor, inténtalo de nuevo.');
    }

    // Continuar con el procesamiento del comentario si la validación es exitosa.
    return $commentdata;
}
add_filter('preprocess_comment', 'validate_recaptcha_on_comment');

    // Disable automatic redirect creation for posts and pages
    add_filter('Yoast\WP\SEO\post_redirect_slug_change', '__return_true');

    // Disable automatic redirect creation for taxonomies
    add_filter('Yoast\WP\SEO\term_redirect_slug_change', '__return_true');
    
    // Añadir width y height automáticamente a imágenes insertadas
add_filter( 'wp_get_attachment_image_attributes', function( $attr, $attachment, $size ) {
    $image = wp_get_attachment_image_src( $attachment->ID, $size );
    if ( $image ) {
        $attr['width']  = $image[1];
        $attr['height'] = $image[2];
    }
    return $attr;
}, 10, 3 );