# airport_delay_sniffer

Sniff delays on certain airports for personal usage

## Usage

    $delays = new FlightSniffer\Selector();
    $delays = $sniffer->airport('ham');
    $delays = $sniffer->today();
    $delays = $sniffer->departures();

    $source = new FlightSniffer\Source\Flightradar24();
    
    $sniffer = new FlightSniffer\Sniffer();
    $sniffer->setSelector($delays);
    $sniffer->setCache('auto');
    $sniffer->addSource($source);
    
    $output = new FlightSniffer\Output\Console();
    $output($sniffer);
    
    // or short
    
    print FlightSniffer\sniff()
        ->flights()
        ->airport('ham')
        ->today()
        ->departures();

## Requirements

* PHP 7.1
    
