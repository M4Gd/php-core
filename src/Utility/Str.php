<?php
namespace Averta\Core\Utility;


class Str
{
	/**
	 * Convert string to camelCase
	 *
	 * @param string  $input                     The string to convert
	 * @param string  $separator                 The character that should be removed
	 * @param boolean $capitalizeFirstCharacter  Whether to capitalize the first character or not
	 *
	 * @return string
	 */
	public static function camelize( string $input, string $separator = "_", $capitalizeFirstChar = false ) {

		$string = str_replace( $separator, '', ucwords( $input, $separator ) );

		if ( $capitalizeFirstChar ) {
			$string = ucfirst( $string );
		}

		return $string;
	}

}