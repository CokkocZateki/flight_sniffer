<?php
/**
 * class file
 */
namespace Antiphp\FlightSniffer\Flight;

use Antiphp\FlightSniffer\Airport\AirportInterface;

class Flight
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var AirportInterface
     */
    private $origin;

    /**
     * @var AirportInterface
     */
    private $destination;

    /**
     * Flight constructor.
     * @param AirportInterface $origin
     * @param AirportInterface $destination
     */
    public function __construct(AirportInterface $origin, AirportInterface $destination)
    {
        $this->setOrigin($origin);
        $this->setDestination($destination);
    }

    /**
     * @return AirportInterface
     */
    public function getOrigin(): AirportInterface
    {
        return $this->origin;
    }

    /**
     * @param AirportInterface $origin
     */
    public function setOrigin(AirportInterface $origin)
    {
        $this->origin = $origin;
    }

    /**
     * @return AirportInterface
     */
    public function getDestination(): AirportInterface
    {
        return $this->destination;
    }

    /**
     * @param AirportInterface $destination
     */
    public function setDestination(AirportInterface $destination)
    {
        $this->destination = $destination;
    }
}