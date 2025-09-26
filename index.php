<?php

require __DIR__ . '/vendor/autoload.php';
use Cocur\Slugify\Slugify;

$slugify = new Slugify();
echo $slugify->slugify('The sky is blue, and the grass is green!!!');

$catsName = 'griso';
function doubleMe($x){
    return $x*2;
}
function tripleMe($x){
    return $x * 3;
}
$OurCoolNumber= tripleMe(doubleMe(2));

if ($OurCoolNumber>40){
    echo 'The number is large enough.';
} else {
    echo "The number is not large enough. \n\n";
}
echo "\n\n hello there";