<?php

/**
 * The template for displaying the front page
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

<main id="primary" class="home-page hero-content">
    <div class="main-content">
        <?php while (have_posts()) : the_post(); ?>
            <div id="hero-text">
                <?php the_content(); ?>
            </div>
            <a class="button" href="<?php echo site_url('/join/') ?>">Join</a>
        <?php endwhile; // End of the loop.
        ?>
    </div><!-- #main -->
    <a href="#introduction"><div class="arrow"></div></a>
</main><!-- #primary -->
<section class="introduction" id="introduction">
    <div class="site-content">
        <?php query_posts('post_category=homepage'); ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <a href="#nominees"><div class="arrow"></div></a>
    </div>
</section>

<section class="nominees" id="nominees">
	<div class="site-content">
		<h2>Nominees</h2>
		<ul class="homepage-nominees">
			<?php query_posts('posts_per_page=3&post_type=nominees'); ?>
			<?php while (have_posts()) : the_post();
				$org_image = get_field("org_image");
                $org_description = get_field("org_description");
                $link = get_field("link");
				$size = "medium";
			?>
				<li class="individual-nominee">
					<figure>
                        <a href="<?php echo $link; ?>">
						<?php echo wp_get_attachment_image($org_image, $size); ?>
</a>
					</figure>

					<a href="<?php echo $link; ?>"><h3><?php the_title(); ?></h3></a>

                    <p><?php echo $org_description; ?></p>
				</li>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>
        <a href="#gallery"><div class="arrow"></div></a>
	</div>
</section>

<section class="gallery" id="gallery">
        <a class="button" href="https://paosanchezmedia.pixieset.com/emeraldcitysupperclub/" target="_blank">Past Suppers</a>
</section>

<?php
get_sidebar();
get_footer();
