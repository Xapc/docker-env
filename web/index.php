<?php

$dateTime = new DateTime();

echo sprintf(
    'Hello. Time: %s',
    $dateTime->format('Y-m-d H:i:s')
);
