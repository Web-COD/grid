<?php
    $con = mysqli_connect('localhost','root');

    if($con) {
        echo "Connection Successful";
    }
    else {
        echo "Connection Failed";
    }

    mysqli_select_db($con, 'mca landing page');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO lead_form (name, email, phone) VALUES ('$name', '$email', '$phone')";

    mysqli_query($con, $query);
    header('location:thankyoupg.php');

    ?>