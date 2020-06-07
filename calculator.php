
<?php 
require "includes/calc.inc.php";
$num = "";
$outpot="";
$history = "";
$op= "";
$ans ="";
if(isset($_POST['number'])){
    $num = $_POST['number'];
    $outpot = $_POST['output'];
    $history = $_POST['history'];
    $op = $_POST['opp'];
    
}
if(isset($_POST['op'])){
    $op = $_POST['op'];
    $history = $_POST['output'];
    $num = "";

}
if(isset($_POST['equal'])){
    $num1= $_POST['history'];
    $num2 = $_POST['output'];
    $cal= $_POST['opp'];
    $Calculator = new calc($num1,$num2,$cal);
    $ans = $Calculator->calc_method();

}
if(isset($_POST['close'])){
    $num = "";
    $outpot="";
    $history = "";
    $op= "";
    $ans ="";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <div class="container">
    <div class="calculator">
 
            
<form action="calculator.php" method="post">
<div class="rsult">
            <div class="history">
                <input type="text" value="<?php echo $history  ?>" name="history" class="output-value history-value" >
            </div>
            <div class="op">
                <input type="text" value="<?php echo $op ?>" name="opp" class="output-value op-value" >
            </div>
            <div class="output">
                <input type="text" value="<?php $num =  $outpot.$num;
                echo $num;
                echo $ans;  ?>" name="output" class="output-value" >
            </div>

        </div>
        <div class="keybord">
    <div class="calculator-body calculator">
        <div class="column">
            <input class="operator" type="submit" value="c" name="close">
            <input class="operator" type="submit" value="del" name="close" id="backspace"/>
            <input class="operator" type="submit" value="%" name="op" id="mood"/>
            <input  class="number" type="submit" value="/" name="op" id="divide"/>
        </div>
        <div class="column">
            <input class="number" type="submit" value="7" name="number"/>
            <input  class="number" type="submit" value="8" name="number"/>
            <input  class="number" type="submit" value="9" name="number"/>
            <input  class="number" type="submit" value="*" name="op" id="multiply"/>
        </div>
        <div class="column">
            <input  class="number" type="submit" value="4" name="number"/>
            <input  class="number" type="submit" value="5" name="number"/>
            <input  class="number" type="submit" value="6" name="number"/>
            <input  class="number" type="submit" value="-" name="op" id="subtract"/>
        </div>
        <div class="column">
            <input  class="number" type="submit" value="1" name="number"/>
            <input  class="number" type="submit" value="2" name="number"/>
            <input  class="number" type="submit" value="3" name="number"/>
            <input  class="number" type="submit" name="op" value="+" id="plus"/>
        </div>
        <div class="column">
            <input  class="number" type="submit" value="0" name="number"/>
            <input  class="number" type="submit" value="." name="number" id="dot"/>
            <input  class="number" type="submit" value="=" name="equal" id="equal"/>
        </div>
</form>

        </div>
    </div>
    </div>

</body>
</html>