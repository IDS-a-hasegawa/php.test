<?php

  class Car {
    public function speed_up() {
      echo "加速します\n";
    }

    public function speed_down() {
      echo "減速します\n";
    }

    public function horn() {
      echo "プップー\n";
    }
  }

  class TruckCar extends Car{ //クラスの継承

    public $janese_name = 'トラック';

    public function carry() {
      echo "荷物を運びます\n";
    }

    public static function testtest () {
      echo "テスト\n";
    }
  }

  $fugafuga = new TruckCar;

  $fugafuga->carry();
  $fugafuga->testtest();
  $fugafuga->speed_down();
  ?>