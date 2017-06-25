<?php
/**
 * interface file
 */
namespace Antiphp\AirportDelaySniffer\Selector;

use Antiphp\AirportDelaySniffer\Selector\Location\LocationInterface;
use Antiphp\AirportDelaySniffer\Selector\Time\TimeInterface;
use Antiphp\AirportDelaySniffer\Selector\Type\TypeInterface;

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