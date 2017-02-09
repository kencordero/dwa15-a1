<?php
$quotes =
    [
        '"The sun\'s not yellow, it\'s chicken." - Bob Dylan',
        '"I choose not to run!" - Jerry Seinfeld',
        '"No, sir, you are too short!" - Anton Bruckner'
    ];

$random_quote = $quotes[mt_rand(0, count($quotes) - 1)];
