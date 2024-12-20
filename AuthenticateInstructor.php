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

include("ConnectDB.php");

$InstructorSignUpBtn = $_POST['InstructorSignUp'];
$InstructorName = $_POST['instructor-name'];
$InstructorEmail = $_POST['instructor-email'];
$InstructorPassword = $_POST['instructor-password'];
$InstructorSkills = $_POST['instructor-skills'];

if(isset($InstructorSignUpBtn) || $_SERVER['REQUEST_METHOD'] == 'POST'){
    $InstructorName = filter_input(INPUT_POST,"instructor-name",FILTER_SANITIZE_STRING);
    $InstructorEmail = filter_input(INPUT_POST,"instructor-email",FILTER_SANITIZE_EMAIL);
    $InstructorSkills = filter_input(INPUT_POST,"instructor-skills",FILTER_SANITIZE_STRING);

    $InstructorEmail = filter_input(INPUT_POST,"instructor-email",FILTER_VALIDATE_EMAIL);
    $HashedInstructorPassword = password_hash($InstructorPassword, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO instructor (Instructor_FullName, Instructor_Email, Instructor_pass,Instructor_Skills) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss",$InstructorName,$InstructorEmail,$HashedInstructorPassword,$InstructorSkills);

    if($stmt->execute()){
        echo "<script>
        Swal.fire({
            title: 'Success!',
            text: 'Data Successfully Collected! Redirecting you to the next page',
            icon: 'success',
            timer: 5000,
            showConfirmButton: false
        }).then(function() {
            window.location.href = 'login.html'; // Redirect to  your login page URL
        });
    </script>";
    }
    else{
        echo "<script>
        Swal.fire({
            title: 'Error!',
            text: 'An error occurred while collecting your data.',
            icon: 'error'
            timer: 5000,
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