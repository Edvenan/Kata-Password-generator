<?php 
  
$size = readline('Enter password size (int > 1): ');


$elements = array_merge(range('A', 'Z') , range('a', 'z') , ['1','2','3','4','5','6','7','8','9','0'] , ['!','@','#','$','%','^','&','*','(',')','{','}','[',']','=','<','>']);

$password_elements = array_rand( $elements, $size);

$password = '';

foreach($password_elements as $element) {
    $password .= $elements[$element];
}


echo "Your password is: " . $password;

?>