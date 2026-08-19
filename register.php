<?php

$conn = mysqli_connect("localhost", "root", "", "database.db");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (fullname, email, phone, address, password)
            VALUES ('$fullname', '$email', '$phone', '$address', '$password')";

    if (mysqli_query($conn, $sql)) {

        echo "<script>
                alert('Registration Successful');
                window.location='login.html';
              </script>";

    } else {

        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>