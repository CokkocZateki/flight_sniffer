<?php
/**
 * class file
 */
namespace Antiphp\FlightSniffer;

use Antiphp\FlightSniffer\Selector\SelectorInterface;
use Antiphp\FlightSniffer\Source\SourceInterface;

class Sniffer
{
    /**
     * @var SelectorInterface
     */
    private $selector;

    /**
     * @var SourceInterface
     */
    private $source;

    public function __invoke()
    {

    }

    /**
     * @return SelectorInterface
     */
    public function getSelector(): SelectorInterface
    {
        return $this->selector;
    }

    /**
     * @param SelectorInterface $selector
     */
    public function setSelector(SelectorInterface $selector)
    {
        $this->selector = $selector;
    }

    /**
     * @return SourceInterface
     */
    public function getSource(): SourceInterface
    {
        return $this->source;
    }

    /**
     * @param SourceInterface $source
     */
    public function setSource(SourceInterface $source)
    {
        $this->source = $source;
    }
}