<form method="POST">

Name: <input type="text" name="name" required> <br> <br>
Email: <input type="email" name="email" required> <br> <br>
Gender:
<input type="radio" name="gender" value="Male" required>Male
<input type="radio" name="gender" value="Female" required>Female
<input type="radio" name="gender" value="Other" required> Other
<br>
<br>
Password: <input type="password" name="password" required> <br> <br>
Confirm Password: <input type="password" name="confirm" required> <br> <br>

<button type="submit">Register form</button>

</form>

<?php 
include "db4.php";
if($_POST){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $confirm=$_POST['confirm'];
    $gender = $_POST['gender'];
if($password!=$confirm){
    echo "password donot match";
}else{
$query="INSERT INTO users(name,email,password,gender)
VALUES('$name','$email','$hashed_password','$gender')
";
if(mysqli_query($conn,$query)){
    echo "Registration successful";
}else{
    echo "error";
}



}
}

?>