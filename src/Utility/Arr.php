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
     * @param array $array
     * @return array
     */
    public static function camelizeKeys( array $array, string $separator = '_'  ) {

		$result = [];

		foreach( $array as $key => $value ) {
			$result[ Str::camelize( $key, $separator ) ] = $value;
		}

		return $result;
	}
}