<?Php 

include ("includes/calc.inc.php");

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$calc = $_POST["calc"];


$calculator = new Calc($num1, $num2, $calc);

if (is_numeric($num1) && is_numeric($num2)) {
    echo "The result is " . $calculator ->calcMethod();   
} else {
    echo "Please Enter a number";
}

