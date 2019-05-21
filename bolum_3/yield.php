<?php

function say($basla, $bitir)
{
    for ($i = $basla; $i <= $bitir; $i++) {
        yield $i;
    }
}

$sayilar = say(0, 100000);

foreach ($sayilar as $sayi) {
    print $sayi . "<br>";
}