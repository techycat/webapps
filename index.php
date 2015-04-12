<?php
echo "hai its me";
function randpass()
{ 
    srand((double)microtime()*1000000); 
    $i = 0;
    $number = rand(30,500);
    return($number);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Math Game</title>
</head>
<body>
<?php
$num1 = randpass();
$num2 = randpass();
if($_POST)
{
    if($_POST['solve'])
    {
        $numadded = $_POST['num1'] + $_POST['num2'];
        if($_POST['solve'] == $numadded)
        {
            echo "You got the question right! Good job!n<br />n<br />n<a href="$REQUEST_URI">Do Another?</a>";
        }
        else
        {
            echo "You did not answer the question correctly!n<br />n<br />n<a href="$REQUEST_URI">Try Again?</a>";
        }
    }
    else
    {
        echo "You didn't answer the problem!";
    }
}
else
{
    echo "<form action="$REQUEST_URI" method="post">n";
    echo "<input type="hidden" value="$num1" name="num1" />n";
    echo "<input type="hidden" value="$num2" name="num2" />n";
    echo "The Problem:<br />n";
    echo "$num1 + $num2 = <input type="text" name="solve" />n";
    echo "<input type="submit" value="Submit!" name="submit" />n";
    echo "</form>n";
}
?>
</body>
</html> 
