<?php

function movie_info($movie,$date){
  echo $movie[$date];
}

$movie = array("title" => "ハリーポッター", "genre" => "ファンタジー", "year" => "2001年");

echo "以下から１つ選んで入力してください。\n";
echo "    ・title\n";
echo "    ・genre\n";
echo "    ・year\n";

$get = trim(fgets(STDIN));

movie_info($movie,$get);


