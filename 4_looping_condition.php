<?php

$awal = 1;
$akhir = 50;
for ($awal; $awal < $akhir + 1; $awal++) {
    if ($awal % 3 == 0) {
        if ($awal % 5 == 0) {
            echo ' FooBar ';
        } else {
            echo ' Foo ';
        }
    } else if ($awal % 5 == 0) {
        if ($awal % 3 == 0) {
            echo ' FooBar ';
        } else {
            echo ' Bar ';
        }
    } else {
        echo ' ' . $awal . ' ';
    }
}
