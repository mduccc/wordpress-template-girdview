<?php
/**
 * Magazine Widget Area Control for the Customizer
 *
 * @package Gridbox
 */

/**
 * Make sure that custom controls are only defined in the Customizer
 */
if ( class_exists( 'WP_Customize_Control' ) ) :

	/**
	 * Magazine Widget Area Customize Control class.
	 *
	 * @see WP_Customize_Control
	 */
	class Gridbox_Magazine_Widget_Area_Customize_Control extends WP_Widget_Area_Customize_Control {
		/**
		 * Enqueue Magazine Widgets Control Scripts.
		 */
		function enqueue() {
			wp_enqueue_script( 'gridbox-customizer-magazine-widgets', get_template_directory_uri() . '/js/customizer-magazine-widgets.js', array( 'jquery' ), '20170627', true );
		}

		/**
		 * Renders the control's content.
		 */
		public function render_content() {
			?>
			<div id="magazine-widgets-buttons">
				<button type="button" class="button-secondary add-new-magazine-widget add-new-widget" aria-expanded="false" aria-controls="available-widgets">
					<?php esc_html_e( 'Add Magazine Widget', 'gridbox' ); ?>
				</button>
				<?php parent::render_content(); ?>
			</div>
			<?php
		}
	}

endif;
