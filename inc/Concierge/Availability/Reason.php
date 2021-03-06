<?php
namespace AweBooking\Concierge\Availability;

class Reason {
	/* Constants */
	const VALID_STATE   = 'VALID_STATE';
	const INVALID_STATE = 'INVALID_STATE';
	const SELECTED_ROOM = 'SELECTED_ROOM';

	/**
	 * Get the reason message.
	 *
	 * @param  string $reason The reason key.
	 * @return string
	 */
	public static function get_message( $reason ) {
		$messages = static::get_messages();

		return array_key_exists( $reason, $messages ) ? $messages[ $reason ] : '';
	}

	/**
	 * Get the reason messages.
	 *
	 * @return array
	 */
	public static function get_messages() {
		return [
			static::VALID_STATE   => esc_html__( 'Passed check the available state', 'awebooking' ),
			static::INVALID_STATE => esc_html__( 'Failure check the available state', 'awebooking' ),
			static::SELECTED_ROOM => esc_html__( 'Selected in current session', 'awebooking' ),
		];
	}
}
