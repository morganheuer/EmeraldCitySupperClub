<?php
/**
 * The template for displaying Frequently Asked Questions
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

	<main id="primary" class="site-main">
    <div class="site-content">
        <h2>Frequently Asked Questions</h2>
        <?php query_posts('post_type=faqs'); ?>
		<?php while ( have_posts() ) : the_post();
            $question = get_field('question');
            $answer = get_field('answer');
        ?>
            <div class="faq-content">
                <div class="faq">
                    <h2><?php echo $question; ?></h2>
                    <h4><?php echo $answer; ?></h5>
                </div>
            </div>

		<?php endwhile; // End of the loop.
		?>
        <?php wp_reset_query(); ?>
    </div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
