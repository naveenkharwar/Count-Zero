<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Count_Zero
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses count_zero_header_style()
 */
function count_zero_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'count_zero_custom_header_args', array(
		'default-image'          =>  get_parent_theme_file_uri( '/assets/images/argyle.jpg' ),
		'default-text-color'     => '000000',
		'width'                  => 980,
		'height'                 => 200,
		'flex-height'            => true,
		'flex-width'            => true,
		'wp-head-callback'       => 'count_zero_header_style',
	) ) );

	// Set up the WordPress default headers feature.
    register_default_headers( array(
        'default-image' => array(
			'url'           => '%s/assets/images/argyle.jpg',
			'thumbnail_url' => '%s/assets/images/argyle.jpg',
			'description'   => __( 'Default Header Image', 'count-zero' ),
        ),
    ) ); 
}
add_action( 'after_setup_theme', 'count_zero_custom_header_setup' );

if ( ! function_exists( 'count_zero_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see count_zero_custom_header_setup().
	 */
	function count_zero_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
		// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;
