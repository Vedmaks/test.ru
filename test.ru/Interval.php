<?php
class Interval
{
    private $date1;
    private $date2;

    public function __construct(Date $date1, Date $date2)
    {
        $this->date1 = date_create($date1);
        $this->date2 = date_create($date2);
    }

    public function toDays()
    {
        return abs(date_timestamp_get($this->date1) - date_timestamp_get($this->date2)) / 60 / 60 / 24;
    }

    public function toMonths()
    {
        return abs(date_timestamp_get($this->date1) - date_timestamp_get($this->date2)) / 60 / 60 / 24/ 30;
    }

    public function toYears()
    {
        return abs(date_timestamp_get($this->date1) - date_timestamp_get($this->date2)) / 60 / 60 / 24/ 365;
    }

    public function __toString()
    {
        return '[years => '.$this->toYears().', months => '.$this->toMonths().', days => '.$this->toDays().']';
    }
}
