<?php
abstract class Lessons {
    public  $tariff; // тариф
    public  $duration; // длительность
    public  $cost; // стоимость

    public function initialization($arr){ //инициализация

        $this->tariff       = $arr['tariff'];
        $this->duration     = $arr['duration'];
    }

    public function __construct($arr){

        $this->initialization($arr);
        $this->iterateItems();
        $this->print_data();
    }

    // Перебираем свойства, ищем нужный тариф и выщитываем стоимость
    public function iterateItems() {
        foreach ($this as $key => $item) {
            if($key == $this->tariff) {
                $this->cost = $item * $this->duration;
            }
        }
    }

    abstract function  print_data();
}

class Speaking  extends Lessons{
    // тарифы для типов занятий
    public $fixed = 200;
    public $by_hour = 100;

    public function print_data() {
          echo 'Your type of lessons is '.__CLASS__.'. Your tariff: '.$this->tariff.', duration: '.$this->duration.', cost: '.$this->cost.'UAH';
    }

}


class Grammar  extends Lessons{
    // тарифы для типов занятий
    public $fixed = 200;
    public $by_hour = 100;

    public function print_data() {
        echo 'Your type of lessons is '.__CLASS__.'. Your tariff: '.$this->tariff.', duration: '.$this->duration.', cost: '.$this->cost.'UAH';
    }

}

$speak = new Speaking(['tariff' => 'fixed', 'duration' => 10]);
$grammar = new Grammar(['tariff' => 'by_hour', 'duration' => 50]);
