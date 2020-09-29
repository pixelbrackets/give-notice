<?php

require __DIR__ . '/../vendor/autoload.php';

// Expects environment variable »GIVENOTICE_URI« to be set
// putenv("GIVENOTICE_URI=http://localhost");

\Pixelbrackets\GiveNotice\Notification::push();

echo PHP_EOL . '*Gave notice to the example service presumably*' . PHP_EOL;
