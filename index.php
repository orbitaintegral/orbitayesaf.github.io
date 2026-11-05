<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<main class="wp-page">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">← Órbita Integral · Volver al inicio</a>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if ( is_singular() ) : ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); wp_link_pages(); ?>
<?php else : ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
<?php endif; ?>
</article>
<?php endwhile; the_posts_pagination(); ?>
<?php else : ?>
<h1><?php esc_html_e( 'No se encontraron contenidos.', 'orbita-integral' ); ?></h1>
<?php endif; ?>
</main>
<?php get_footer(); ?>
