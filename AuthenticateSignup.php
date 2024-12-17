<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
</head>
<body>
    
<?php

include("ConnectDB.php");

$StudentSignUpBtn = $_POST['StudentSignUp'];
$StudentName = $_POST['student-name'];
$StudentEmail = $_POST['student-email'];
$StudentPassword = $_POST['student-password'];

if(isset($StudentSignUpBtn) || $_SERVER['REQUEST_METHOD'] == 'POST'){
    $StudentName = filter_input(INPUT_POST,"student-name",FILTER_SANITIZE_STRING);
    $StudentEmail = filter_input(INPUT_POST,"student-email",FILTER_SANITIZE_EMAIL);

    $StudentEmail = filter_input(INPUT_POST,"student-email",FILTER_VALIDATE_EMAIL);
    $HashedStudentPassword = password_hash($StudentPassword, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO student (Student_FullName, Student_Email, Student_Pass) VALUES (?,?,?)");
    $stmt->bind_param("sss",$StudentName,$StudentEmail,$HashedStudentPassword);

    if($stmt->execute()){
        echo "<script>
        Swal.fire({
            title: 'Success!',
            text: 'Data Successfully Collected! Redirecting you to the next page',
            icon: 'success',
            timer: 2000,
            showConfirmButton: false
        }).then(function() {
            window.location.href = 'login.html'; // Redirect to your login page URL
        });
    </script>";
    }
    else{
        echo "<script>
        Swal.fire({
            title: 'Error!',
            text: 'An error occurred while collecting your data.',
            icon: 'error'
            timer: 2000,
        }).then(function() {
            window.history.back();
        });
    </script>";
    }

    $stmt->close();
    $conn->close();

}


?>

</body>
</html>