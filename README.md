# airport_delay_sniffer

Sniff delays on certain airports for personal usage

## Usage

    $delays = new FlightSniffer\Selector();
    $delays = $sniffer->airport('ham');
    $delays = $sniffer->today();
    $delays = $sniffer->departures();

    $f24 = new FlightSniffer\Source\Flightradar24();
    $f24Cached = new FlightSniffer\Source\Cache($source);
    $f24Cached(
    
    $sniffer = new FlightSniffer\Sniffer();
    $sniffer->setSelector($delays);
    $sniffer->setSource($f24Cached);
    
    $output = new FlightSniffer\Output\Console();
    $output($sniffer());
    
    // or short
    
    print FlightSniffer\sniff()
        ->airport('ham')
        ->today()
        ->departures()

## Requirements

* PHP 7.1
    
