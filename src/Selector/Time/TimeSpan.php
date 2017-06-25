<?php
/**
 * class file
 */

namespace Antiphp\AirportDelaySniffer\Selector\Time;

class TimeSpan implements TimeInterface
{
    /**
     * @var \DateTimeInterface
     */
    private $start;

    /**
     * @var \DateTimeInterface
     */
    private $end;

    /**
     * TimeSpan constructor.
     * @param \DateTimeInterface|null $start
     * @param \DateTimeInterface|null $end
     */
    public function __construct(?\DateTimeInterface $start = null, ?\DateTimeInterface $end = null)
    {
        if ($start !== null) {
            $this->setStart($start);
        }
        if ($end !== null) {
            $this->setEnd($end);
        }
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStart(): \DateTimeInterface
    {
        return $this->start;
    }

    /**
     * @param \DateTimeInterface $start
     */
    public function setStart(\DateTimeInterface $start)
    {
        $this->start = $start;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEnd(): \DateTimeInterface
    {
        return $this->end;
    }

    /**
     * @param \DateTimeInterface $end
     */
    public function setEnd(\DateTimeInterface $end)
    {
        $this->end = $end;
    }
}