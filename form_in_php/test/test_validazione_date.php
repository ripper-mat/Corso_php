<?php
require "./form_in_php/class/ValidateDate.php";
//validateRequired campo obbligatorio, quindi non deve essere vuoto
//la funzione dovrà ritornare false in caso di campo vuoto
//array di array di casi possibili da tenere sotto controllo
$testCases = [
    [
        'input' => '       ',    
        'expected' => false
    ],
    [
        'input'=> 'ciao    ',
        'expected'=> 'ciao'
    ],
    [
        'input'=> '  ciao  ',
        'expected' => 'ciao',
    ],
    [
        'input'=> '  ciao',
        'expected' => 'ciao'
    ],
    [
        'input'=> '',
        'expected' => false
    ],
    [
        'input'=> '<h1>ciao</h1>',
        'expected' => 'ciao'
    ],
    [
        'input'=> '<b>ciao</b>',
        'expected' => 'ciao'
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

    $v = new ValidateRequired();
    if($v->isValid($input) != $expected){
        echo "\nTest numero $key non superato mi aspettavo:";
        var_dump($expected);
        echo "\nma ho trovato";
        var_dump($v->isValid($input));
    }

}