<?php
namespace Averta\Core\Utility;


class Arr
{

	/**
     * Whether keys exist or not
     *
     * @param array $keys   An array of keys
     * @param array $array  The array to check
     *
     * @return bool
     */
    public static function keysExist( array $keys, array $array )
    {
        return ! array_diff_key( array_flip( $keys ), $array );
    }


	/**
     * camelCase keys of an array
     *
     * @param array   $array        The array to check
	 * @param string  $separator    The character that should be removed
     * @param array   $ignoreKeys   The list of keys to ignore
	 *
     * @return array
     */
    public static function camelizeKeys( array $array, string $separator = '_', $ignoreKeys = []  ) {

		$result = [];

		foreach( $array as $key => $value ) {
			if( ! in_array( $key, $ignoreKeys ) ){
				$key = Str::camelize( $key, $separator );
			}
			$result[ $key ] = $value;
		}

		return $result;
	}
}