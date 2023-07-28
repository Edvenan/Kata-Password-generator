<?php 
  
$elements = array_merge(range('A', 'Z') , range('a', 'z') , range(0,9) , ['!','@','#','$','%','^','&','*','(',')','{','}','[',']','=','<','>']);

$size = intval(readline('Enter password size: '));

if ($size) {
    echo "Your password is: ";
    for ($i=0; $i < $size; $i++) { 
        echo $elements[array_rand( $elements )];
    }
}
?>