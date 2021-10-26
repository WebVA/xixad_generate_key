<?php

    include('connection.php');

    session_start();
    $user_id = $_SESSION['id'];
    $sql = "select * from license where user_id = '$user_id'";
    $result = mysqli_query($con, $sql);

    $flg = 0;

    for($index = 0 ; $index < 10 ; $index ++) {
        $flg = 0;

        $sql = "select * from license where user_id = '$user_id'";
        $result = mysqli_query($con, $sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $key_id = $row['id'];
            }
        }
        $key_id ++;

        $date = new DateTime();
        $date = time();

        $value = srand($date);
        $value = $value | $key_id;

        $value = hash('sha1', $value, false);
        $value = substr($value, -7);

        $sql = "select * from license where user_id = '$user_id'";
        $result = mysqli_query($con, $sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($value == $row['license_key']) {
                    $flg = 1;
                    break;
                }
            }
            if($flg == 0) break;
        }
    }


    if($index == 10) {
        $_SESSION['error'] = "same key exists";
        header("Location: ../failed.php");
    }

    $date = new DateTime();
    $date = $date->format('Y-m-d H:i:s');

    $sql = "INSERT INTO license (user_id, license_key, created_at) VALUES ('$user_id', '$value', '$date')";
    $result = mysqli_query($con, $sql);

    header("Location: ../success.php");

?>