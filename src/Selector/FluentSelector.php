<?php
/**
 * class file
 */
namespace Antiphp\FlightSniffer\Selector;

use Antiphp\FlightSniffer\Selector\Location\Airport;
use Antiphp\FlightSniffer\Selector\Location\LocationInterface;
use Antiphp\FlightSniffer\Selector\Time\TimeInterface;
use Antiphp\FlightSniffer\Selector\Time\TimeSpan;
use Antiphp\FlightSniffer\Selector\Type\Departure;
use Antiphp\FlightSniffer\Selector\Type\TypeInterface;

class FluentSelector implements SelectorInterface
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
     * @return TimeInterface
     */
    public function getTime(): TimeInterface
    {
        return $this->time;
    }

    /**
     * @return TypeInterface
     */
    public function getType(): TypeInterface
    {
        return $this->type;
    }

    /**
     * @param string $code
     * @return FluentSelector
     */
    public function airport(string $code): FluentSelector
    {
        $this->setLocation(new Airport($code));
        return $this;
    }

    /**
     * @return FluentSelector
     */
    public function today()
    {
        $this->setTime(
            new TimeSpan(
                new \DateTimeImmutable('today, 00:00'),
                new \DateTimeImmutable('today, 23:59:59')
            )
        );
        return $this;
    }

    public function departures()
    {
        $this->setType(new Departure());
    }

    /**
     * @param LocationInterface $location
     */
    private function setLocation(LocationInterface $location): void
    {
        $this->location = $location;
    }

    /**
     * @param TimeInterface $time
     */
    private function setTime(TimeInterface $time)
    {
        $this->time = $time;
    }

    /**
     * @param TypeInterface $type
     */
    private function setType(TypeInterface $type)
    {
        $this->type = $type;
    }
}