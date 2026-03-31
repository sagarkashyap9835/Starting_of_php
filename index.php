

<!-- post method body se data leta hai -->
 <!-- get method url se data bhejta h -->
<!-- <form method="POST">
Name: <input type="text" name="username" required>
<br><br>
Email: <input type="email" name="email">
<button>Submit</button>
</form> -->
<?php
// if($_POST){
//     $name=$_POST['username'];
//     $email=$_POST['email'];
//      echo $name;
//     echo "<br>";
//     echo $email;
// }
?>


<!-- <form method="POST">
    Name: <input type="text" name="name" ><br><br>
    Email: <input type="email" name="email" required><br><br>
    Phone: <input type="text" name="phone" required><br><br>
    <button type="submit">Submit</button>
</form> -->

<?php
// if($_POST){
//     $name  = $_POST['name'];
//     $email  = $_POST['email'];
//     $phone = $_POST['phone'];
//   echo $name;
//     echo "<br><br>";
//     echo $email;
//     echo "<br><br>";
//     echo $phone;
// }
   

?>








<!-- <form method="GET">
Name: <input type="text" name="username">
<br><br>
Email: <input type="email" name="email">
<button>Submit</button>
</form> -->
<?php
// if($_GET){
//     $name=$_GET['username'];
//     $email=$_GET['email'];
//      echo $name;
//     echo "<br>";
//     echo $email;
// }
?>


<!-- <form method="POST">
    Username: <input type="text" name="username">
    <br><br>

    Password: <input type="password" name="password" >
        <br>
        <br>
        <button>Login</button>
</form> -->
<?php
// if($_POST){
//     $user=$_POST['username'];
//     $pass=$_POST['password'];
// if($user=="admin" && $pass=="123"){
//     echo "login success";
// } 
// else{
//     echo "login failed";
// }
// }
?>


<!-- Registration form -->
<!-- <form method="POST">
    Name: <input type="text" name="name" required><br><br>

    Email: <input type="email" name="email" required><br><br>

    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <br><br>

    Password: <input type="password" name="password" required><br><br>

    Confirm Password: <input type="password" name="cpassword" required><br><br>

    <button type="submit">Register</button>
</form> -->

<?php
// if($_POST){
//     $name   = $_POST['name'];
//     $email  = $_POST['email'];
//     $gender = $_POST['gender'];
//     $pass   = $_POST['password'];
//     $cpass  = $_POST['cpassword'];

//     if($pass != $cpass){
//         echo "Password not match";
//     }else{
//         echo "Registration Successful";
//         echo "<br>";
//         echo "Name: " . $name;
//         echo "<br>";
//         echo "Email: " . $email;
//         echo "<br>";
//         echo "Gender: " . $gender;
//     }
// }
?>




<?php
include "db.php";

if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password != $confirm){
        echo "Password not match";
    }else{

        $query = "INSERT INTO users(name,email,phone,gender,password)
                  VALUES('$name','$email','$phone','$gender','$password')";

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
Phone: <input type="text" name="phone" required><br><br>

Gender:
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
<br><br>

Password: <input type="password" name="password" required><br><br>
Confirm Password: <input type="password" name="confirm" required><br><br>

<button type="submit">Register</button>
</form>




