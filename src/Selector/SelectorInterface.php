<?php
/**
 * interface file
 */
namespace Antiphp\FlightSniffer\Selector;

use Antiphp\FlightSniffer\Selector\Location\LocationInterface;
use Antiphp\FlightSniffer\Selector\Time\TimeInterface;
use Antiphp\FlightSniffer\Selector\Type\TypeInterface;

interface SelectorInterface
{
    /**
     * @return LocationInterface
     */
    public function getLocation(): LocationInterface;

    /**
     * @return TimeInterface
     */
    public function getTime(): TimeInterface;

    /**
     * @return TypeInterface
     */
    public function getType(): TypeInterface;
}