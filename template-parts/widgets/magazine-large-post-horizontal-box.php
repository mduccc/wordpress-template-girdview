<?php
/**
 * The template for displaying large posts in Magazine Post widgets
 *
 * @package Gridbox
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'large-post clearfix' ); ?>>

	<?php gridbox_post_image(); ?>

	<div class="post-content">

		<header class="entry-header">

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php gridbox_entry_meta(); ?>

		</header><!-- .entry-header -->

		<div class="entry-content">

			<?php the_excerpt(); ?>
			<?php gridbox_more_link(); ?>

		</div><!-- .entry-content -->

	</div>

</article>
