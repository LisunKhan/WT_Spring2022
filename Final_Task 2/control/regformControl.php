<?php

include ("../model/regformModel.php");
if(isset($_POST["Submit"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $prefLang1=$prefLang2=$prefLang3="not selected";
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $file="";
    if(empty($fname)||empty($lname)||empty($age)||!isset($_POST["desig"])||empty($email)||empty($pass))
    {
        echo "Please insert all fields";
    }
    else
    {
        $desig=$_POST["desig"];
        
        

        if(!isset($_POST["prfLang1"]) && !isset($_POST["prfLang2"]) && !isset($_POST["prfLang3"]))
        {
            echo "select one";
            $pl=$prefLang1.",".$prefLang2.",".$prefLang3;
        }
        else
        {
            if(isset($_POST["prfLang1"]))
            {
                $prefLang1=$_POST["prfLang1"];
            }
            if(isset($_POST["prfLang2"]))
            {
                $prefLang2=$_POST["prfLang2"];
            }
            if(isset($_POST["prfLang3"]))
            {
                $prefLang3=$_POST["prfLang3"];
            }
            $pl=$prefLang1.",".$prefLang2.",".$prefLang3;
        }
        
        if ($_FILES["file"]["type"]=="text/plain")
        {
            if(move_uploaded_file($_FILES["file"]["tmp_name"],"..//".$fname.date("y-m-d").".txt"))
            {
                $file =  $_FILES["file"]["name"];
            }

        }
   
        $mydb=new DB();
        $conobj=$mydb->opencon();
        $mydb->InsertData($fname,$lname,$age,$desig,$pl,$email,$pass,$file,'employee',$conobj);
        $mydb->closecon($conobj);
    }



}

?>