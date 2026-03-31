
<?php
include "db2.php";

if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password != $confirm){
        echo "Password not match";
    }else{

        $query = "INSERT INTO users(name,email,password)
                  VALUES('$name','$email','$password')";

        if(mysqli_query($conn,$query)){
            echo "Registration Successful";
        }else{
            echo "Error";
        }
    }
}
?>

<form method="POST">
Name: <input type="text" name="name" required><br><br>
Email: <input type="email" name="email" required><br><br>


Password: <input type="password" name="password" required><br><br>
Confirm Password: <input type="password" name="confirm" required><br><br>

<button type="submit">Register</button>
</form>
