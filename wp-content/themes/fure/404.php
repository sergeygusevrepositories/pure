<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

    <section class="error">
        <div class="container">
            <div class="error_block">
                <div class="error_block--number">404</div>
                <div class="error_block--p">Страница не найдена</div>
                <div class="error_block--bottom">
                    <a href="<?php echo home_url(); ?>" class="error_block--btn">ПЕРЕЙТИ НА ГЛАВНУЮ</a>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
