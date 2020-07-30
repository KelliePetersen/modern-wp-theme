<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying the home page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="hero">
  <img class="hero__image" src="<?php echo get_template_directory_uri(); ?>/img/hero1920.jpg" alt="photo of a large city">
  <div class="hero__overlay"></div>
  <div class="hero__container">
    <p class="hero__subheading">SUBHEADING</p>
    <h1 class="hero__heading">This is where you put your page title.</h1>
    <a class="button" href="#about">
      READ MORE
      <div class="button__icon">&rarr;</div>
    </a>
  </div>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
