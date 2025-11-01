<?php
$marks = 90;
if($marks >= 90 && $marks <= 100){
    echo"Grade A";
}
elseif($marks >= 75 && $marks <= 89){
    echo"Grade B";
}
elseif($marks >= 60 && $marks <= 74){
    echo"Grade C";
}
elseif($marks >= 40 && $marks <= 59){
    echo"Grade D";
}
else{
    echo" Fail";
}
?>