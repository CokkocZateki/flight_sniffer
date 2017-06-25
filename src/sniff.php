<?php
/**
 * function file
 */
namespace Antiphp\AirportDelaySniffer;

/**
 * @return Sniffer
 */
function sniff(): Sniffer
{
    return new Sniffer();
}