<?php

$js = [
    0 => '<script type="text/javascript" src="' . base_url('assets/js/jquery.slim.min.js') . '"></script>',
    1 => '<script type="text/javascript" src="' . base_url('assets/js/bootstrap.bundle.min.js') . '"></script>',
    2 => '<script type="text/javascript" src="' . base_url('assets/js/main.js') . '"></script>'
];

foreach ($js as $key => $src) {
    echo $src . "\n";
}
