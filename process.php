<?php
/*
    apakah ada atribut dengan nama 'save' yang dikirim dari form menggunakan method=POST
    cek menggunakan isset()
    jika ada, proses script bawahnya
*/
if(isset($_POST['save'])){
    $num1 = $_POST['input1'];
    $num2 = $_POST['input2'];
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
            echo "$num1 x $num2 = $result";
        break;
        case '/':
            $result = $num1 / $num2;
            echo "$num1 : $num2 = $result";
        break;
    }
}