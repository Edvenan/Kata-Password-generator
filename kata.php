<?php 
  
$size = intval(readline('Enter password size: '));

$elements = array_merge(range('A', 'Z') , range('a', 'z') , range(0,9) , ['!','@','#','$','%','^','&','*','(',')','{','}','[',']','=','<','>']);

if ($size == 1) {
    echo $elements[array_rand( $elements, $size)];
}
elseif ($size > 1) {
    foreach(array_rand( $elements, $size) as $element) {
        echo $elements[$element];
    }
}
?>