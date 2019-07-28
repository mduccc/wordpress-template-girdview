<?php
/**
 * The template for displaying the footer.
 *
 * Contains all content after the main content area and sidebar
 *
 * @package Gridbox
 */

?>

</div><!-- #content -->

<?php do_action('gridbox_before_footer'); ?>

<div id="footer" class="footer-wrap">

    <footer id="colophon" class="site-footer container clearfix" role="contentinfo">

        <div id="footer-text" class="site-info">
            <?php
            $address = get_theme_mod('address_footer');
            $mobile_number = get_theme_mod('mobile_number_footer');
            $email = get_theme_mod('email_footer');
            $artName = get_theme_mod('art_name_footer');
            $organization_name = get_theme_mod('organization_name_footer');
            ?>

            <?php
            echo $organization_name.'<br>';
            echo 'Họa sỹ: '.$artName.'<br>';
            echo 'Địa chỉ: '.$address.'<br>';
            echo 'Điện thoại: '.$mobile_number.'<br>';
            echo 'Email: '.$email.'<br>';
            echo 'Họa sỹ: '.$artName.'<br>';
            ?>
            <!--/gridbox/inc/template-tags.php-->
            <?php do_action('gridbox_footer_text'); ?>
        </div><!-- .site-info -->

        <?php do_action('gridbox_footer_menu'); ?>
    </footer><!-- #colophon -->

</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
