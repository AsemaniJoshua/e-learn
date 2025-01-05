<?php

    session_start();

?>

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

    if(isset($_POST['InstructorLogin'])){

        $InstructorEmail = $_POST['instructorEmail'];
        $InstructorPassword = $_POST['instructorPassword'];

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
                    echo "<script>
                    Swal.fire({
                        icon:'success',
                        title: 'Login Successfull',
                        text: 'Your Login attempt was successful',
                        showConfirmButton: false,
                        timer: 5000
                    }).then(() => {
                        window.location.href = 'Dashboard.php';
                    });
                    </script>";
                    exit();
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
