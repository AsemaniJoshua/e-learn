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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $recaptchaResponse = $_POST['g-recaptcha-response'];
    // $secretKey = 'YOUR_SECRET_KEY';
    $userIp = $_SERVER['REMOTE_ADDR'];
    $verificationUrl = "https://www.google.com/recaptcha/api/siteverify?secret=6LfEFJ4qAAAAAJ8hJ6_CfblpMyrIkFcJd6F1y1vK&response={$recaptchaResponse}&remoteip={$userIp}";

    $response = file_get_contents($verificationUrl);
    $responseData = json_decode($response);

    if ($responseData->success) {
        echo "<script>
            Swal.fire({
                title: 'Success!',
                text: 'reCAPTCHA verified! Wait while we login you in.',
                icon: 'success',
                timer: 5000,
                showConfirmButton: false
            })
        </script>";
        // // .then(function() {
        //     window.location.href = 'AuthenticateLogin.php'; // Replace with your login page URL
        // });
    } else {
        echo "<script>
            Swal.fire({
                title: 'Error!',
                text: 'reCAPTCHA verification failed. Please try again.',
                icon: 'error'
                timer: 5000,
            }).then(function() {
                window.history.back();
            });
        </script>";
    }
}
?>


<?php

    session_start();

    include("ConnectDB.php");

    $StudentEmail = $_POST['student-email'];
    $StudentPassword = $_POST['student-password'];
    $InstructorEmail = $_POST['instructor-email'];
    $InstructorPassword = $_POST['instructor-password'];

    if(isset($_POST['StudentLogin'])){

        try{
            $stmt = $conn->prepare("SELECT Student_Id,Student_FullName,Student_Email,Student_Pass FROM student WHERE Student_Email = ?");
            $stmt->bind_param("s", $StudentEmail);
            $stmt->execute();
            $stmt->bind_result($Student_Id,$Student_FullName,$Student_Email,$Student_Pass);
            
            if($stmt->fetch()){
                if(password_verify($StudentPassword, $Student_Pass)){
                    $_SESSION['Student_Id'] = $Student_Id;
                    $_SESSION['Student_FullName'] = $Student_FullName;
                    $_SESSION['Student_Email'] = $Student_Email;
                    header("Location: Dashboard.php");
                }
            }

            $stmt->close();
            $conn->close();
        
        }
        catch(Exception $e){
            echo "Error: ". $e->getMessage();
        }      
                
    
    }
    else if(isset($_POST['InstructorLogin'])){
        try{
            $stmt = $conn->prepare("SELECT Instructor_Id,Instructor_FullName,Instructor_Email,Instructor_pass,Instructor_Skills FROM instructor WHERE Instructor_Email = ?");
            $stmt->bind_param("s", $InstructorEmail);
            $stmt->execute();
            $stmt->bind_result($Instructor_Id,$Instructor_FullName,$Instructor_Email,$Instructor_pass,$Instructor_Skills);
            
            if($stmt->fetch()){
                if(password_verify($InstructorPassword, $Instructor_pass)){
                    $_SESSION['Instructor_Id'] = $Instructor_Id;
                    $_SESSION['Instructor_FullName'] = $Instructor_FullName;
                    $_SESSION['Instructor_Email'] = $Instructor_Email;
                    $_SESSION['Instructor_Skills'] = $Instructor_Skills;
                    header("Location: Dashboard.php");
                }
            }

            $stmt->close();
            $conn->close();
        
        }
        catch(Exception $e){
            echo "Error: ". $e->getMessage();
        }
    }

    
    

?>

</body>
</html>






