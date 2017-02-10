<?php
$quotes =
[
    [
        'quote' => '"The sun\'s not yellow, it\'s chicken."',
        'attribution' => 'Bob Dylan'
    ],
    [
        'quote' => '"I choose not to run!"',
        'attribution' => 'Jerry Seinfeld'
    ],
    [
        'quote' => '"No, sir, you are too short!"',
        'attribution' => 'Anton Bruckner'
    ],
    [
        'quote' => '"..."',
        'attribution' => 'Teller'
    ],
    [
        'quote' => '"I should run on the double, I think I\'m in trouble"',
        'attribution' => 'Lindsey Buckingham'
    ]
];

$random_quote = $quotes[mt_rand(0, count($quotes) - 1)];
