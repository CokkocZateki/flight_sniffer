<?php
/**
 * function file
 */
namespace Antiphp\FlightSniffer;

/**
 * @return Sniffer
 */
function sniff(): Sniffer
{
    return new Sniffer();
}