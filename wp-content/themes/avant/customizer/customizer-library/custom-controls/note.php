<?php
/**
 * Customize for Customizer note, extend the WP customizer
 *
 * @package 	Customizer_Library
 * @author		Devin Price, The Theme Foundry
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return NULL;
}

class Customizer_Library_Note extends WP_Customize_Control {

	/**
	 * Render the control's content.
	 *
	 * Allows the content to be overriden without having to rewrite the wrapper.
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	public function render_content() {
		?>
		<div class="kaira-note-txt">
            <div class="kaira-note-txt-desc"><?php echo wp_kses_post( $this->description ); ?></div>
		</div>
		<?php
	}

}