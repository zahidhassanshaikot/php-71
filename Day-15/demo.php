<?php
//echo "<html>";
//    echo "<head>";
//    echo "<title>";
//        echo "HOME";
//    echo "</title>";
//    echo "</head>";
//    echo "<body>";
//        echo "<h1> this is heading</h1>";
//        echo "<p> this is paragraph</p>";
//    echo "</body>";
//
//echo "</html>";

?>

<!--<html>-->
<!--<head>-->
<!--    <title>--><?php //echo "Home"; ?><!--</title>-->
<!--</head>-->
<!--<body>-->
<!--    <h1>--><?php //echo "this is heading"; ?><!--</h1>-->
<!--    <p> --><?php //echo "this is paragraph"; ?><!--</p>-->
<!--    <input type="text" value=" --><?php //echo "this is heading"; ?><!--"/>-->
<!--</body>-->
<!--</html>-->
<!--error-fatal,warning, parse,notice-->
<?php
//3 standard rules for variable
//start with $ sign
//A-Z a-z 0-9,_
//No number in first
/*
$firstName="Zahid";
$lastName="Shaikat";

echo $firstName.$lastName;
*/


$x=10;
$y=20;
//Arithmatic operator binary
//echo $x+$y;

//Arithmatic operator unary
//$x++;
//echo -$x;

//Assignment operator
//$x+=$y;
//echo $x.=$y;
//echo $x%=$y;

//conditional operator
if($x<$y){
    echo "x is small";
}else{echo "x is not small";}

if($x<$y){
    echo "x is small. <br/>";
}


//logical

for($x;$x<=$y;$x++){
    echo $x." ";
}

?>