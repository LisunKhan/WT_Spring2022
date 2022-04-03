<html>
    <body>
        <?php
          include "../Model/registrationcheck.php";
        $fname = $lname = $age= $designation=$email=$file="";
        $language1=$language2=$language3="not selected";
        if(isset($_POST["submit"]))
        {
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $age =   $_POST["age"];
            $password = $_POST["pwd"];
            $email = $_POST["Ename"];

           if(!isset($_POST["Gender"])||empty($_POST["fname"])||empty($_POST["lname"]) || empty($_POST["age"] )|| empty($_POST["Ename"]) || empty($_POST["pwd"]))
           {
               echo "All field must be filled ";
           }
           else 
            {
                if (strlen($_POST["fname"]) < 3 )
                {
                    echo "please give a valid name ";
                }
                
                if (strlen($lname) < 3 )
                {
                    echo "please give a valid last name ";
                }

                if ($age < 18 )
                {
                    echo "please give a age ";
                }

                if( empty($email ))
                {
                    echo "please give a valid email ";
                }

                if (isset($_POST["Gender"]))
                {
                    $designation = $_POST["Gender"];
                }

                if (!isset($_POST["language1"]) && !isset($_POST["language2"]) && !isset($_POST["language3"]))
                 {
                     echo "You have to select atleast one ";
                     $str = $language1.",".$language2.",".$language3;

                 }
                 else 
                 {
                    if (isset($_POST["language1"]))
                    {
                        $language1 = $_POST["language1"];
                    }
                    if (isset($_POST["language2"]))
                    {
                        $language2 = $_POST["language2"];
                    }
                    if (isset($_POST["language3"]))
                    {
                        $language3 = $_POST["language3"];
                    }
                     $str = $language1.",".$language2.",".$language3;
                     
                 }
                 if ($_FILES["file"]["type"] == "text/plain" )
                 {
                     if (move_uploaded_file($_FILES["file"]["tmp_name"],"../files/".$fname.date("y-m-d").".text"))
                     {
                         $file = $_FILES["file"]["name"];

                     }
                    
                    
                 }
                

                


                 $mydb = new DB();
                 $conbj = $mydb->connection();
                 $insert = $mydb->inserdata($fname,$lname,$age,$designation,$str,$email,$password,$file,"from",$conbj);
                 $mydb->closecon($conbj);


            


            }
        }
        ?>
    </body>
</html>