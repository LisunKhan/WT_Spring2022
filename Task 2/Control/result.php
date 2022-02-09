<?php

$fname=$_REQUEST["fname"];

if(strlen($fname)<5)
{
    echo "please enter valied name";
}
else
{
    echo "Valied name".$fname;
}
echo "<br>";
$lname=$_REQUEST["lname"];

if(strlen($lname)<5)
{
    echo "please enter valied name";
}
else
{
    echo "Valied name".$lname;
}
echo "<br>";
$num=$_REQUEST["num"];

if(empty($num))
{
    echo "please enter valied age";
}
else
{
    echo "Valied age".$num;
}

echo "<br>";
if(isset($_POST["radio"]))
{
    echo "You have selected".$_POST["radio"];
}
else
{
    echo "You have not selected";
}
echo "<br>";
if(isset($_POST["box1"])||isset($_POST["box2"])||isset($_POST["box3"]))
{
    echo "You have selected";
    if(isset($_POST["box1"]))
    {
        echo $_POST["box1"];
    }
    if(isset($_POST["box2"]))
    {
        echo $_POST["box2"];
    }
    if(isset($_POST["box3"]))
    {
        echo $_POST["box3"];
    }
}
else
{
    echo "Not selected";
}

?>