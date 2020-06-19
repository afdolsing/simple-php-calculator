<?php

// jika isset 'save' dari form index ada nilainya
if(isset($_POST['save'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $option = $_POST['option'];

    switch($option){
        case '+':
            $result = $num1 + $num2;
            echo "$num1 + $num2 = $result";            
        break;
        case '-':
            $result = $num1 - $num2;
            echo "$num1 - $num2 = $result";
        break;
        case '*':
            $result = $num1 * $num2;
            echo "$num1 * $num2 = $result";
        break;
        case '/':
            $result = $num1 / $num2;
            echo "$num1 / $num2 = $result";
        break;
    }
}