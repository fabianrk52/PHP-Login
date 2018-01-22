<?php
    include 'db.php';
    include 'config.php';

    if(!empty($_POST["email"])){
        $query = "SELECT * FROM tbl_user_100 WHERE email='" 
        .$_POST["email"]
        ."'and password='"
        .$_POST["password"]
        ."'";
    }

    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($result);

    if(is_array($row)){
        $message="Successful";
    }
    else{
        $message="Unsuccessful";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
<p>Username:</p>
<input name="email">
<p>Password:</p>
<input type="password">
<br><br>
<input type="submit">
<?php if(isset($message)){echo $message;}?>
</form>
</body>
</html>

<?php
mysqli_close($connection);


?>