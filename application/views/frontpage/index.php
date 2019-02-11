<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="<?= CI_LOCALE ?>">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Include CSS Files -->
    <?php $this->load->view('inc/css') ?>
</head>

<body>
    <?php //$this->security->get_csrf_token_name()?>
    <?php //$this->security->get_csrf_hash()?>

    <!-- Include JS Files -->
    <?php $this->load->view('inc/js') ?>
</body>

</html>