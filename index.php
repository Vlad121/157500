

<?php

$text = "TO jest 1 linijka tekstu";
$tablica = [];
for ($i=0;$i<10;$i++) {
    array_push($tablica, "To jest ".($i+1)." linijka tekstu");

            
}
foreach($tablica as $element) {
    echo $element;
}
