<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class ZIOR_Blocks_ACF_Button extends Abstract_Block {

	protected $name = 'acf-buttons';
	protected $shortcode_function = 'zior_acf_button';

	protected function get_labels() {
		return [
			'title'       => esc_html__( 'ACf Buttons', 'zior-blocks' ),
			'description' => esc_html__( 'Custom button with link coming from ACF fields.', 'zior-blocks' ),
			'keywords'    => [
				esc_html__( 'acf', 'zior-blocks' ),
				esc_html__( 'ACF buttons', 'zior-blocks' ),
			],
			'panel_settings' => esc_html__( 'Settings', 'zior-blocks' ),
		];
	}

	/**
	 * Retrieve the list of attributes.
	 *
	 * @return array
	 */
	protected function get_attributes() {
		return [];
	}
}