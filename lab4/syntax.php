<?php
// Variables
$Hello = 'a';
$php = 'Hello';
$you = 'php';
$are = 'you';
$brilliant = 'are';
$a = 'brilliant';
echo $$$$$a.' ';
echo $$$$a.' ';
echo $$$a.' ';
echo $$a.' ';
echo $a.'!';

// String concatenation
$c = '<br><br>Nice to ';
echo $c .= 'meet you!';

// Hash array
$array = array(
    "first" => "Web",
    "second" => "is",
    3 => "cool",
    4 => "thing!",
);

// The functions implode, explode
$string_from_array = implode(' ', $array);
$array_from_string = explode(' ', $string_from_array);

echo '<br><br>'.$string_from_array.'<br>';
foreach ($array_from_string as $key => $value) {
    echo '<br>key: '.$key.', ';
    echo 'value: '.$value;
}

// Types conversion
$int = 10;
$str = "$int";
$str_too = (string) $int;

// Comparison
if ($str === $str_too) {
    echo '<br><br>They are the same!';
} else {
    echo '<br><br>They are different!';
}
?>