<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/bootsrap-utilities.php for info on BsWp::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Bootstrap 4.3.1
 * @autor 		Babobski
 */
?>
<?php BsWp::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="position-relative">
    <!-- Hero for FREE version -->
    <section class="section section-lg section-hero section-shaped">
        <!-- Background circles -->
        <div class="shape shape-style-1 shape-primary">
            <span class="span-150"></span>
            <span class="span-50"></span>
            <span class="span-50"></span>
            <span class="span-75"></span>
            <span class="span-100"></span>
            <span class="span-75"></span>
            <span class="span-50"></span>
            <span class="span-100"></span>
            <span class="span-50"></span>
            <span class="span-100"></span>
        </div>
        <div class="container shape-container d-flex align-items-center py-lg">
            <div class="col px-0">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 text-center">
                        <img alt="image" src="https://latamclub.org/wp-content/uploads/2019/11/logo200-1.png" style="width: 280px;" class="img-fluid">
                        <p class="lead text-white">Nos centramos en el desarrollo de capacidades tecnológicas, de emprendimiento, socio-emocionales y de gestión de la multiculturalidad.</p>
                        <div class="btn-wrapper mt-5">
                            <!--<a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0">
                                <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                                <span class="btn-inner--text">Download HTML</span>
                            </a>-->
                            <a href="#contacto" class="btn btn-lg btn-github btn-icon mb-3 mb-sm-0" target="_blank">
                                <span class="btn-inner--icon"><i class="fa fa-envelope"></i></span>
                                <span class="btn-inner--text"><span class="text-warning"></span> Contactanos</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
</div>



<div class="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
		<h2>
			<?php the_title(); ?>
		</h2>
		<?php the_content(); ?>
		<?php comments_template( '', true ); ?>
	
	<?php endwhile; ?>
</div>

<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
