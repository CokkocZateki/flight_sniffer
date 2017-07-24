<?php
/**
 * class file
 */

namespace Antiphp\FlightSniffer\Flight;

use Antiphp\Collection\Collection;
use Antiphp\Collection\ElementInterface;

class FlightCollection extends Collection
{
    /**
     * @param ElementInterface $element
     * @return bool
     */
    public function accept(ElementInterface $element): bool
    {
        return $element instanceof Flight;
    }
}