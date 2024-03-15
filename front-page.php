<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *header("Access-Control-Allow-Origin: https://mobin.nicolastroadec.fr, http://localhost:8888");

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mobin-solution
 */

get_header();
?>
<div class="hero">
    <?php $image_mise_en_avant = get_the_post_thumbnail_url(); ?>
    <img src="<?= $image_mise_en_avant; ?>" alt="<?= get_the_title(); ?>">
</div>
<?php require_once(get_template_directory() . '/inc/inc-articles.php'); ?>

<main id="primary" class="site-main">
</main><!-- #main -->


<?php
// get_sidebar();
get_footer();

?>