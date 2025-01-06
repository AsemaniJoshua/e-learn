<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>



<?php

session_start();

if(!isset($_SESSION['Student_Id']) || !isset($_SESSION['Instructor_Id'])){
    echo "<script>
        Swal.fire({
            title: 'Information!',
            text: 'Please login and enroll in that course from the course catalogue!',
            icon: 'info',
            timer: 4000,
            showConfirmButton: false
        }).then(function() {
            window.location.href = 'login.html'; // Redirect to your Login page URL
        });
        </script>";
    exit();
} 

?>


</body>
</html>