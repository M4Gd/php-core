<?php
namespace Averta\Core\Utility;

class Trim
{
	/**
	 * Trim string by character length.
	 *
	 * @param        $string
	 * @param int    $max_length
	 * @param string $more
	 *
	 * @return string
	 */
    public static function text( $string, $max_length = 1000, $more = ' ...' )
    {
        return function_exists( 'mb_strimwidth' ) ? mb_strimwidth( $string, 0, $max_length, $more ) : substr( $string, 0, $max_length ) . $more;
    }

}
