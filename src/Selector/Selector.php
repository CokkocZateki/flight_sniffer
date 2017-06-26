<?php
/**
 * class file
 */
namespace Antiphp\FlightSniffer\Selector;

use Antiphp\FlightSniffer\Selector\Location\LocationInterface;
use Antiphp\FlightSniffer\Selector\Time\TimeInterface;
use Antiphp\FlightSniffer\Selector\Type\TypeInterface;

class Selector implements SelectorInterface
{
    /**
     * @var LocationInterface
     */
    private $location;

    /**
     * @var TimeInterface
     */
    private $time;

    /**
     * @var TypeInterface
     */
    private $type;

    /**
     * @return LocationInterface
     */
    public function getLocation(): LocationInterface
    {
        return $this->location;
    }

    /**
     * @param LocationInterface $location
     */
    public function setLocation(LocationInterface $location)
    {
        $this->location = $location;
    }

    /**
     * @return TimeInterface
     */
    public function getTime(): TimeInterface
    {
        return $this->time;
    }

    /**
     * @param TimeInterface $time
     */
    public function setTime(TimeInterface $time)
    {
        $this->time = $time;
    }

    /**
     * @return TypeInterface
     */
    public function getType(): TypeInterface
    {
        return $this->type;
    }

    /**
     * @param TypeInterface $type
     */
    public function setType(TypeInterface $type)
    {
        $this->type = $type;
    }
}