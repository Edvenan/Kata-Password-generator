<?php 
  
$size = readline('Enter password size (int): ');


$elements = array_merge(range('A', 'Z') , range('a', 'z') , ['1','2','3','4','5','6','7','8','9','0'] , ['!','@','#','$','%','^','&','*','(',')','{','}','[',']','=','<','>']);

$password = array_rand( $elements, $size);

$output = '';

foreach($password as $element) {
    $output = $output . $elements[$element];
}


echo "Your password is :" . $output;

?>