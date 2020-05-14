<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'Hello';

$names = ["first"=>"php", "a"=>"Arrays", "b"=>"are","c"=> "gay","d"=> "as","e"=> "heck"];
echo "<br /> <br/> <br />";
print_r($names);
echo "<br/>";

foreach ($names as $name){

    if ($name == "php"){
        echo "\n <h2>Big ol' sweaty dicks</h2>";
        continue;
    }
    echo "<h3>${name}</h3>";
}
