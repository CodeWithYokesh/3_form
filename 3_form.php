<?php
if($_POST){
    $name=$_POST['name'];
    $email=$_POST['email'];

    if(empty($name)) echo "Name required<br>";
    else echo "Name: ".htmlspecialchars($name)."<br>";

    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        echo "Invalid email<br>";
    else echo "Email: ".htmlspecialchars($email);
}
?>

<form method="post">
Name: <input name="name"><br>
Email: <input name="email"><br>
<input type="submit">
</form>