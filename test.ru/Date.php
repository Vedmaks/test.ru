<?php
class Date
{
    private $date;

    public function __construct($date = '')
    {
        if (isset($date)) {
            $this->date = date_create($date);
        } else $this->date = date('Y-m-d');
    }

    public function getDay()
    {
        return date_format($this->date, 'd');
    }

    public function getMonth($lang = null)
    {
        switch ($lang) {
            case 'ru':
                switch (date_format($this->date, 'm')) {
                    case '01':
                        return 'январь';
                    break;
                    case '02':
                        return 'февраль';
                        break;
                    case '03':
                        return 'март';
                        break;
                    case '04':
                        return 'апрель';
                        break;
                    case '05':
                        return 'май';
                        break;
                    case '06':
                        return 'июнь';
                        break;
                    case '07':
                        return 'июль';
                        break;
                    case '08':
                        return 'август';
                        break;
                    case '09':
                        return 'сентябрь';
                        break;
                    case '10':
                        return 'октябрь';
                        break;
                    case '11':
                        return 'ноябрь';
                        break;
                    case '12':
                        return 'декабрь';
                        break;
                }
            break;
            case 'en':
                switch (date_format($this->date, 'm')) {
                    case '01':
                        return 'january';
                        break;
                    case '02':
                        return 'february';
                        break;
                    case '03':
                        return 'march';
                        break;
                    case '04':
                        return 'april';
                        break;
                    case '05':
                        return 'may';
                        break;
                    case '06':
                        return 'june';
                        break;
                    case '07':
                        return 'jule';
                        break;
                    case '08':
                        return 'august';
                        break;
                    case '09':
                        return 'september';
                        break;
                    case '10':
                        return 'october';
                        break;
                    case '11':
                        return 'november';
                        break;
                    case '12':
                        return 'december';
                        break;
                }
                break;
        }
        return date_format($this->date, 'm');
    }

    public function getYear()
    {
        return date_format($this->date, 'Y');
    }

    public function getWeekDay($lang = null)
    {
        switch ($lang) {
            case 'ru':
                switch (date_format($this->date, 'w')) {
                    case '1':
                        return 'понедельник';
                        break;
                    case '2':
                        return 'вторник';
                        break;
                    case '3':
                        return 'среда';
                        break;
                    case '4':
                        return 'четверг';
                        break;
                    case '5':
                        return 'пятница';
                        break;
                    case '6':
                        return 'суббота';
                        break;
                    case '0':
                        return 'воскресенье';
                        break;
                }
                break;
            case 'en':
                switch (date_format($this->date, 'w')) {
                    case '1':
                        return 'monday';
                        break;
                    case '2':
                        return 'tuesday';
                        break;
                    case '3':
                        return 'wednesday';
                        break;
                    case '4':
                        return 'thursday';
                        break;
                    case '5':
                        return 'friday';
                        break;
                    case '6':
                        return 'saturday';
                        break;
                    case '0':
                        return 'sunday';
                        break;
                }
                break;
        }
        return date_format($this->date, 'w');
    }

    public function addDay($value)
    {
        $this->date = date_modify($this->date, $value.'days');
        return $this;
    }

    public function subDay($value)
    {
        $this->date = date_modify($this->date, - $value.'days');
        return $this;
    }

    public function addMonth($value)
    {
        $this->date = date_modify($this->date, $value.'month');
        return $this;
    }

    public function subMonth($value)
    {
        $this->date = date_modify($this->date, - $value.'month');
        return $this;
    }

    public function addYear($value)
    {
        $this->date = date_modify($this->date, $value.'Year');
        return $this;
    }

    public function subYear($value)
    {
        $this->date = date_modify($this->date, - $value.'Year');
        return $this;
    }

    public function format($format = null)
    {
        if (isset($format)) {
            return date_format($this->date, $format);
        }
        return date_format($this->date, 'Y-m-d');
    }

    public function __toString()
    {
        return $this->format();
    }
}

