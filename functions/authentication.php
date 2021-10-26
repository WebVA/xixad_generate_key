<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);

    $password = hash('md5', $password, false);
    
    $sql = "select idDistributors from Distributors where username = '$username' and password = '$password'";  
    
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    $id = $row['idDistributors'];

    session_start();
    $_SESSION['id'] = $id;

    if($count == 1){
        header("Location: ../generate.php");
    }
    else{
        header("Location: ../index.php");
    }
?>