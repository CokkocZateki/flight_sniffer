# airport_delay_sniffer

Sniff delays on certain airports for personal usage

## Usage

    $delays = new AirportDelaySniffer\Selector();
    $delays = $sniffer->airport('ham');
    $delays = $sniffer->today();
    $delays = $sniffer->departures();

    $source = new AirportDelaySniffer\Source\Flightradar24();
    
    $sniffer = new AirportDelaySniffer\Sniffer();
    $sniffer->setSelector($delays);
    $sniffer->setCache('auto');
    $sniffer->addSource($source);
    
    $output = new AirportDelaySniffer\Output\Console();
    $output($sniffer);
    
    // or short
    
    print AirportDelaySniffer\sniff()
        ->delays()
        ->airport('ham')
        ->today()
        ->departures();

## Requirements

* PHP 7.1
    
