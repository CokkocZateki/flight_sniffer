<?php
/**
 * class file
 */
namespace Antiphp\AirportDelaySniffer\Selector\Location;

class Airport implements LocationInterface
{
    /**
     * @var string
     */
    private $code;

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
}