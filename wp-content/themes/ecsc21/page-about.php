<?php

/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecsc
 */

get_header();
?>

<main id="about" class="about-page hero-content">
    <div class="main-content">
        <div id="hero-text">
            <h3>So what <em>is</em> the Emerald City Supper Club?</h3>
        </div>
    </div>
    <a href="#statements"><div class="arrow"></div></a>
</main>
<section id="statements">


    <div class="site-content">

        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; // End of the loop. 
        ?>
    </div>
</section>


<?php
get_footer();
