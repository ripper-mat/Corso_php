<?php
require "./form_in_php/class/Validable.php";
require "./form_in_php/class/ValidateDate.php";

$testCases = [
    [
        'input' => '       ',    
        'expected' => false
    ],
    [
        'input'=> '16/02/1994    ',
        'expected'=> '16/02/1994'
    ],
    [
        'input'=> '32/02/1994    ',
        'expected'=> false
    ],
    [
        'input'=> '  16/02/1994  ',
        'expected' => '16/02/1994'
    ],
    [
        'input'=> '  16/02/1994',
        'expected' => '16/02/1994'
    ],
    [
        'input'=> '',
        'expected' => false
    ],
    [
        'input'=> '<h1>16/02/1994</h1>',
        'expected' => '16/02/1994'
    ],
    [
        'input'=> '<b>16/02/1994</b>',
        'expected' => '16/02/1994'
    ],
    [
        'input'=> '<b>   </b>',
        'expected' => false
    ],
    [
        'input'=> '<b></b>  ',
        'expected' => false
    ],
    [
        'input'=> '<b>  ',
        'expected' => false
    ]
];


foreach ($testCases as $key => $test){
    //print_r($test['input']);
    $input = $test['input'];
    $expected = $test['expected'];

    $v = new ValidateDate();
    if($v->isValid($input) != $expected){
        echo "\nTest numero $key non superato mi aspettavo: ";
        var_dump($expected);
        echo "\nma ho trovato ";
        var_dump($v->isValid($input));
    }

}