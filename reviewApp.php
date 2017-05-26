<?php

//メソッドの定義
function post_reviews($a_posts){ //レビューを書く
//変数の定義
$post = array();
echo "ジャンルを入力してください:\n";
$post ['genre'] = trim(fgets(STDIN));
echo "タイトルを入力してください:\n";
$post ['title'] = trim(fgets(STDIN));
echo "感想を入力してください:\n";
$post ['review'] = trim(fgets(STDIN));
$line = "---------------------------\n";

//レビューの描画
echo "ジャンル:{$post['genre']}\n{$line}\n";
echo "タイトル:{$post['tan(arg)itle']}\n{$line}\n";
echo "感想:\n{$post['review']}\n{$line}\n";

//添え字配列を作る
$a_posts[] = $post;

//$a_postsを関数に返す
return $a_posts;

}

function read_reviews($a_posts){//レビューを読む

  foreach($a_posts as $key => $value){
    echo "[$key]" . $value['title'] ,PHP_EOL;
  }

  echo "見たいレビューの番号を入力してください：\n";
  $input = intval(trim(fgets(STDIN)));
  $post = $a_posts[$input];

    $line = "----------------------";
  echo "ジャンル：{$post['genre']}\n$line\n";
  echo "タイトル：{$post['title']}\n$line\n";
  echo "感想：\n{$post['review']}\n$line\n";

}

function end_program(){//プログラムを終了する
  exit;
}

function exception(){
  echo "入力された値は無効です";
}

$posts = array(); //最初に添え字配列を作るためのやつ

while (true) {
//メニューの表示
echo "レビュー数:" . count($posts) ,PHP_EOL;
echo "[0]レビューを書く\n";
echo "[1]レビューを読む\n";
echo "[2]アプリを終了する\n";
$input = intval(trim(fgets(STDIN)));

  if ($input === 0) {
    $posts = post_reviews($posts); //作ったものを$postsに代入していくやつ
  } elseif ($input === 1) {
    read_reviews($posts);
  } elseif ($input === 2) {
      end_program();
  } else{
      exception();
  }

}

?>
