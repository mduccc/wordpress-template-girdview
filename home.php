<?php
/**
 * The template for displaying the blog index (latest posts)
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gridbox
 */

get_header();

// Get Theme Options from Database.
$theme_options = gridbox_theme_options();

// Display Featured Posts.
if (true === $theme_options['featured_blog']) :

    get_template_part('template-parts/featured-content');

endif;

// Display Magazine Homepage Widgets.
gridbox_magazine_widgets();

// Display Blog Title.
gridbox_blog_title();
?>

<section id="primary" class="content-archive content-area">
    <main id="main" class="site-main" role="main">

        <style>
            .navigation.pagination {
                display: none;
            }
        </style>

        <?php
        if (have_posts()) : ?>

            <?php
            $categories = get_categories();
            $categoryIDArr = [];
            foreach ($categories as $category) {
                switch ($category->slug) {
                    case 'hoc-ve':
                        $categoryIDArr[] = $category->term_id;
                        break;
                    case 've-tranh-tuong':
                        $categoryIDArr[] = $category->term_id;
                        break;
                    case 'tranh-son-dau':
                        $categoryIDArr[] = $category->term_id;
                        break;
                }
            }

            foreach ($categoryIDArr as $categoryID) {
                ?>

                <div class="header">
                    <span class="logo"><a
                                href="<?php echo get_category_link($categoryID) ?>"><?php echo get_cat_name($categoryID) ?></a></span>
                    <div class="header-right">
                        <a href="<?php echo get_category_link($categoryID) ?>">Xem thêm >></a>
                    </div>
                </div>

                <div id="post-wrapper" class="post-wrapper clearfix">

                    <?php
                    $index = 0;
                    $query = new WP_Query(['category_name' => get_cat_name($categoryID)]);

                    // The Loop
                    while ($query->have_posts() && $index < 4) {
                        $query->the_post();
                        get_template_part('template-parts/content');
                        $index++;
                    }

                    ?>

                </div>

                <?
            }
            ?>

            <?php gridbox_pagination(); ?>

        <?php
        else :

            get_template_part('template-parts/content', 'none');

        endif; ?>

    </main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
