<?php

    echo date_default_timezone_get() . "\n";

    echo "Set timezone to GMT.\n";
    ini_set('date.timezone', 'GMT');

    echo date_default_timezone_get() . "\n";

    $date = new \DateTime('201511-27');

    print_r($date, false);
