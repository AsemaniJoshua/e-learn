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

    // if(!isset($_SESSION['Student_Id']) || !isset($_SESSION['Instructor_Id'])){
    //     echo "<script>
    //         Swal.fire({
    //             title: 'Information!',
    //             text: 'Please login and enroll in that course from the course catalogue!',
    //             icon: 'info',
    //             timer: 4000,
    //             showConfirmButton: false
    //         }).then(function() {
    //             window.location.href = 'login.html'; // Redirect to your Login page URL
    //         });
    //         </script>";
    //     exit();
    // } 

    include("ConnectDB.php");

    // $WebDev1 = $_POST['WebDev1'];
    // $WebDev2 = $_POST['WebDev2'];
    // $WebDev3 = $_POST['WebDev3'];
    // $Backend1 = $_POST['Backend1'];
    // $Backend2 = $_POST['Backend2'];
    // $Backend3 = $_POST['Backend3'];

    $Student_Id = $_SESSION['Student_Id'];
    $WebDev1 =1;
    $WebDev2 =2;
    $WebDev3 =3;
    $Backend1 =4;
    $Backend2 =5;
    $Backend3 =6;

    try{

        if(isset($_POST['WebDev1'])){
            $stmt = $conn->prepare("INSERT INTO student_courses (Student_Id, Course_Id) VALUES (?,?)");
            $stmt->bind_param("ii", $Student_Id, $WebDev1);
            if($stmt->execute()){
                echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully enrolled in this course!',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                }).then(function() {
                    window.location.href = 'Dashboard.php'; // Redirect to your Dashboard page URL
                });
                </script>";
            }
            $stmt->close();
            $conn->close();
            exit();
        }
        else if(isset($_POST['WebDev2'])){
            $stmt = $conn->prepare("INSERT INTO student_courses (Student_Id, Course_Id) VALUES (?,?)");
            $stmt->bind_param("ii", $Student_Id, $WebDev2);
            if($stmt->execute()){
                echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully enrolled in this course!',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                }).then(function() {
                    window.location.href = 'Dashboard.php'; // Redirect to your Dashboard page URL
                });
                </script>";
            }
            $stmt->close();
            $conn->close();
            exit();
        }
        else if(isset($_POST['WebDev3'])){
            $stmt = $conn->prepare("INSERT INTO student_courses (Student_Id, Course_Id) VALUES (?,?)");
            $stmt->bind_param("ii", $Student_Id, $WebDev3);
            if($stmt->execute()){
                echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully enrolled in this course!',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                }).then(function() {
                    window.location.href = 'Dashboard.php'; // Redirect to your Dashboard page URL
                });
                </script>";
            }
            $stmt->close();
            $conn->close();
            exit();
        }
        else if(isset($_POST['Backend1'])){
            $stmt = $conn->prepare("INSERT INTO student_courses (Student_Id, Course_Id) VALUES (?,?)");
            $stmt->bind_param("ii", $Student_Id,  $Backend1);
            if($stmt->execute()){
                echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully enrolled in this course!',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                }).then(function() {
                    window.location.href = 'Dashboard.php'; // Redirect to your Dashboard page URL
                });
                </script>";
            }
            $stmt->close();
            $conn->close();
            exit();
        }
        else if(isset($_POST['Backend2'])){
            $stmt = $conn->prepare("INSERT INTO student_courses (Student_Id, Course_Id) VALUES (?,?)");
            $stmt->bind_param("ii", $Student_Id,  $Backend2);
            if($stmt->execute()){
                echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully enrolled in this course!',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                }).then(function() {
                    window.location.href = 'Dashboard.php'; // Redirect to your Dashboard page URL
                });
                </script>";
            }
            $stmt->close();
            $conn->close();
            exit();
        }
        else if(isset($_POST['Backend3'])){
            $stmt = $conn->prepare("INSERT INTO student_courses (Student_Id, Course_Id) VALUES (?,?)");
            $stmt->bind_param("ii", $Student_Id,  $Backend3);
            if($stmt->execute()){
                echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully enrolled in this course!',
                    icon: 'success',
                    timer: 3000,
                    showConfirmButton: false
                }).then(function() {
                    window.location.href = 'Dashboard.php'; // Redirect to your Dashboard page URL
                });
                </script>";
            }
            $stmt->close();
            $conn->close();
            exit();
        }
    }
    catch(Exception $e){
        // echo "Error:" . $e->getMessage();
        echo "<script>
        Swal.fire({
            title: 'Error!',
            text: 'This error can be due to connection issues or trying to enroll in a course more than once!, please check your internet connection or the course you are trying to enroll in!',
            icon: 'error',
            timer: 7000,
            showConfirmButton: false
        }).then(function() {
            window.location.href = 'Dashboard.php'; // Redirect to your Dashboard page URL
        });
        </script>";
    }

?>

</body>
</html>