<?php 


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password1"];
        $confirm_password = $_POST["confirm-password"];
        
// validate username


        /*

        


        if($email != ""){
            echo "USER email is". $email. "<br>";
        }else{
            echo "field username is empty <br>";
        }
        */

        /*
        if(trim($email) != ""){
            echo "USER email is NOT empty <br>";
        }else{
            echo "field email is empty <br>";
        }

        if(trim($username) != ""){
            echo "USER username is NOT empty <br>";
        }else{
            echo "field username is empty <br>";
        }

        if(trim($password) != ""){
            echo "USER password is NOT empty <br>";
        }else{
            echo "field password is empty <br>";
        }

        if(trim($confirm_password) != ""){
            echo "USER confirm_password is NOT empty <br>";
        }else{
            echo "field confirm_password is empty <br>";
        }
        */


        test($username);
        test($email);
        test($password);
        test($confirm_password);


        test ($username);



        function test($fieldName){
            if(trim($fieldName) != ""){
                echo "USER field is NOT EMPTY<br>";
            }else{
                echo"field $$fieldName is empty<br>";
            }
        }
        

        //echo "USER email is ". $email. "<br>";
        //echo "USER username is". $username;

     

    }

?>