<?php

$css = [
    0 => '<link rel="stylesheet" href="' . base_url('assets/css/bootstrap.min.css') . '">',
    1 => '<link rel="stylesheet" href="' . base_url('assets/css/material-icons.css') . '">',
    2 => '<link rel="stylesheet" href="' . base_url('assets/css/material-color.min.css') . '">',
    3 => '<link rel="stylesheet" href="' . base_url('assets/css/main.css') . '">'
];

foreach ($css as $key => $link) {
    echo $link . "\n";
}
