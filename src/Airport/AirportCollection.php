<?php
/**
 * class file
 */

namespace Antiphp\FlightSniffer\Airport;

use Antiphp\Collection\Collection;
use Antiphp\Collection\ElementInterface;

class AirportCollection extends Collection
{
    /**
     * @param ElementInterface $element
     * @return bool
     */
    public function accept(ElementInterface $element): bool
    {
        return $element instanceof AirportInterface;
    }
}