<?php
namespace Averta\Hydrate;

interface ExtractionInterface
{
    /**
	 * Extract values for this class
	 *
	 * @return array
	 */
    public function extract();
}
