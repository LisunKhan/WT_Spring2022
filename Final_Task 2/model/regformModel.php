<?php
class DB
{
    function opencon()
    {
        $DBHostname="localhost";
        $DBUsername="root";
        $DBPass="";
        $DBName="regform";

        $conn=new mysqli($DBHostname,$DBUsername,$DBPass,$DBName);
        if($conn->connect_error)
        {
            echo "cant create connection  object".$conn->connect_error;
        }
        return $conn;
    }
    function InsertData($fname,$lname,$age,$desig,$pl,$email,$pass,$file,$tablename,$conn)
    {
        $sqlstr="INSERT INTO $tablename (fname,lname,age,designation,pref_lang,email,pass,file_n) VALUES ('$fname','$lname',$age,'$desig','$pl','$email','$pass','$file')";
        if($conn->query($sqlstr)===TRUE)
        {
            echo "Data Inserted";
        }
        else
        {
            echo "cant insert".$conn->error;
        }
    }

    function closecon($conn)
    {
        $conn->close();
    }

}

?>