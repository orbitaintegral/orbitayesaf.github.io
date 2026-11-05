<?php
/** Portada corporativa: aparece automáticamente al activar el tema. */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
get_template_part( 'template-parts/landing' );
get_footer();
