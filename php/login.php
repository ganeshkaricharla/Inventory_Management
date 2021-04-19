<?php
    $username = filter_input(INPUT_POST, 'Email');
    $password = filter_input(INPUT_POST, 'Password');
    if(isset($_POST['submitbtn']) == true)
    {
        if (!empty($username))
        {
            if (!empty($password))
            {
                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "1234";
                $dbname = "invmgmtsc";
                // Create connection
                $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                if (mysqli_connect_error())
                {
                    die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
                }
                else
                {
                    $sql =  " SELECT email,password from logindb where email = '$username' and password ='$password' ";
                    if ($conn->query($sql))
                    {
                        echo "Hello $username" ;
                    }
                    else
                    {
                        echo "Error: ". $sql ." ". $conn->error;
                    }
                    $conn->close();
                }
            }
            else
            {
                echo "Password should not be empty";
                die();
            }
        }
        else
        {
            echo "Username should not be empty";
            die();
        }
    }
?>
