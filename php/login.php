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
                    $sql =  " SELECT email,password,name from logindb where email = '$username' and password ='$password' ";
                    $result = $conn->query($sql);
                    if ( mysqli_num_rows($result)  > 0)
                    {
<<<<<<< HEAD
                        echo "Hello $username" ;
=======
                        $data = $result->fetch_row();
                        echo "Hello ".$data[2]." frands";
>>>>>>> 0b35784600c1dc3af0d57c3141fc6adcb5519778
                    }
                    else
                    {
                        echo "Wrong User Name or Password";
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
