<?php

function say($sayi)
{
    print $sayi . "<br>";
    if ($sayi < 10) {
        say($sayi + 1);
    }
}

//say(1);

$kategoriler = [
    [
        "id" => 1,
        "parent" => 0,
        "ad" => "Dersler"
    ],
    [
        "id" => 2,
        "parent" => 0,
        "ad" => "Güncel"
    ],
    [
        "id" => 3,
        "parent" => 0,
        "ad" => "Blog"
    ],
    [
        "id" => 4,
        "parent" => 1,
        "ad" => "PHP"
    ],
    [
        "id" => 5,
        "parent" => 1,
        "ad" => "HTML"
    ],
    [
        "id" => 6,
        "parent" => 1,
        "ad" => "CSS"
    ],
    [
        "id" => 7,
        "parent" => 4,
        "ad" => "Dizi"
    ],
    [
        "id" => 8,
        "parent" => 4,
        "ad" => "Function"
    ],
    [
        "id" => 9,
        "parent" => 4,
        "ad" => "Foreach"
    ]
];

function listele($arr,$parent=0)
{
    print "<ul>";
    foreach ($arr as $ar) {
        if ($ar["parent"] == $parent) {
            print "<li>" . $ar["ad"] . "</li>";
            print listele($arr,$ar["id"]);
        }
    }
    print "</ul>";
}

listele($kategoriler);