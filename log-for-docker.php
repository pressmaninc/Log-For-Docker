<?php
/*
Plugin Name: Log For Docker
Description: Save the log suitable for the docker environment. You can check the output with the docker logs command.
Version: 1.0
Author: Kazunao Anahara
Author URI: https://www.pressman.ne.jp/
License: GPLv2
*/

if ( ! defined( 'ABSPATH' ) ) exit;

class Log_For_Docker {
	public static function log( $message ) {
		self::_write( self::_message( $message ), 'php://stdout' );
	}

	public static function error( $message ) {
		self::_write( self::_message( $message, true ), 'php://stderr' );
	}

	protected function _message( $message, $is_error=false ) {
		$message = apply_filters( 'pre_docker_Log_message', $message, $is_error );
		$message = self::_print_r( $message );
		$message = apply_filters( 'docker_Log_message', $message, $is_error );
		return $message;
	}

	protected static function _write( $output, $path ) {
		$std = fopen( $path, 'w' );
		fwrite( $std, $output );
		fclose( $std );
	}

	protected static function _print_r( $message ) {
		if( !is_string( $message ) ){
			$message = print_r( $message , true );
		}

		return $message;
	}
}