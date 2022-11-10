<?php

include 'includes/calc.inc.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];

$calculator = new Calculator($num1, $num2);

if ($operation == 'add') {
    echo $calculator->add();
}
else if ($operation == 'subtract') {
    echo $calculator->subtract();
}
else if ($operation == 'multiply') {
    echo $calculator->multiply();
}
else if ($operation == 'divide') {
    echo $calculator->divide();
}
else {
    echo('<p>Invalid operation.</p>');
}