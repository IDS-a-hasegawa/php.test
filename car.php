<?php

Class Car {
// 静的プロパティ
// $count:作った車の台数
  private static $count = 0;
  public $name = '';

// 静的メソッド
// getcount():台数をお知らせ
  static function getCount() {
    echo Car::$count, PHP_EOL;
  }

//メソッド
//getName():名乗る
  function getName() {
    echo $this->name, PHP_EOL;
  }

// コンストラクタ
// １台つくるごとに
  // カウントを１増やす
  // 名前の設定
  function __construct($settingname) {
    echo "完成", PHP_EOL;

    Car::$count += 1;

    $this->name = $settingname;
  }

}

$demio = new Car("zabon");
Car::getCount();
$demio->getName();

$passo = new Car("iyokan");
Car::getCount();
$passo->getName();

?>