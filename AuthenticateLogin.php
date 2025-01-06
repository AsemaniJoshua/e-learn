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

    $StudentEmail = $_POST['studentEmail'];
    $StudentPassword = $_POST['studentPassword'];

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
                    echo "<script>
                    Swal.fire({
                        icon:'success',
                        title: 'Login Successfull',
                        text: 'Your Login attempt was successful. Wait as we redirect you to the dashboard.',
                        showConfirmButton: false,
                        timer: 4000
                    }).then(() => {
                        window.location.href = 'dashboard.php';
                    });
                    </script>";
                    exit();
                }
                else{
                    echo "<script>
                    Swal.fire({
                        icon:'error',
                        title: 'Error!',
                        text: 'Your Password is incorrect. Please try again.',
                        showConfirmButton: false,
                        timer: 4000
                    }).then(() => {
                        window..locat.href = 'login.html';
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






