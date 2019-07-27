<?php
/**
 * The template for displaying articles in the loop with post excerpts
 *
 * @package Gridbox
 */

?>

<div class="post-column clearfix">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php gridbox_post_image_archives(); ?>

        <header class="entry-header">

            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
            <?php
            global $wpdb;
            global $post;

            $categorys = get_the_category($post->ID);
            $is_art_course = false;

            /*If post is a art course*/
            foreach ($categorys as $category) {
                if ($category->slug == 'hoc-ve' || $category->slug == 'tranh-ban')
                    $is_art_course = true;
            }

            if ($is_art_course) {
                $sql = "SELECT art_cost FROM " . $wpdb->prefix . "posts WHERE ID = " . $post->ID;
                $result = $wpdb->get_results($sql);
                if ($result != null && !empty($result)) {
                    $new_result = '';
                    /*Format VND*/
                    for ($i = 1; $i <= strlen($result[0]->art_cost); $i++) {
                        $new_result = $new_result . '' . strrev($result[0]->art_cost)[$i - 1];
                        if ($i % 3 == 0)
                            $new_result = $new_result . '.';
                    }
                    if (trim($new_result) != '')
                        echo '<span class="art-cost-label">Giá: </span><span class="art-cost-content">'.trim(strrev($new_result), '.') . ' VND </span>';
                } else
                    echo 'false';
            }
            ?>
            <?php gridbox_entry_meta(); ?>

        </header><!-- .entry-header -->

        <div class="entry-content entry-excerpt clearfix">
            <?php the_excerpt(); ?>
            <?php gridbox_more_link(); ?>
        </div><!-- .entry-content -->

    </article>

</div>
