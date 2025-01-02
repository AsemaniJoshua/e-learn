<?php

    session_start();

    if(!isset($_SESSION['Student_Id']) || !isset($_SESSION['Instructor_Id'])){
        echo "<script>
            Swal.fire({
                title: 'Information!',
                text: 'Please login and enroll in that course from the course catalogue!',
                icon: 'info',
                timer: 7000,
                showConfirmButton: false
            }).then(function() {
                window.location.href = 'login.html'; // Redirect to your Login page URL
            });
            </script>";
        exit();
    } 

    include("ConnectDB.php");

    $WebDev1 = $_POST['WebDev1'];
    $WebDev2 = $_POST['WebDev2'];
    $WebDev3 = $_POST['WebDev3'];
    $Backend1 = $_POST['Backend1'];
    $Backend2 = $_POST['Backend2'];
    $Backend3 = $_POST['Backend3'];

    try{

        if(isset($WebDev1)){
            $stmt = $conn->prepare("INSERT INTO student_courses (Student_Id, Course_Id) VALUES (?,?)");
            $stmt->bind_param("si", $_SESSION['Student_Id'], 1);
            if($stmt->execute()){
                echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully enrolled in this course!',
                    icon: 'success',
                    timer: 5000,
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
        else if(isset($WebDev2)){
            $stmt = $conn->prepare("INSERT INTO student_courses (Student_Id, Course_Id) VALUES (?,?)");
            $stmt->bind_param("si", $_SESSION['Student_Id'], 2);
            if($stmt->execute()){
                echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully enrolled in this course!',
                    icon: 'success',
                    timer: 5000,
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
        else if(isset($WebDev3)){
            $stmt = $conn->prepare("INSERT INTO student_courses (Student_Id, Course_Id) VALUES (?,?)");
            $stmt->bind_param("si", $_SESSION['Student_Id'], 3);
            if($stmt->execute()){
                echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully enrolled in this course!',
                    icon: 'success',
                    timer: 5000,
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
        else if(isset($Backend1)){
            $stmt = $conn->prepare("INSERT INTO student_courses (Student_Id, Course_Id) VALUES (?,?)");
            $stmt->bind_param("si", $_SESSION['Student_Id'], 4);
            if($stmt->execute()){
                echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully enrolled in this course!',
                    icon: 'success',
                    timer: 5000,
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
        else if(isset($Backend2)){
            $stmt = $conn->prepare("INSERT INTO student_courses (Student_Id, Course_Id) VALUES (?,?)");
            $stmt->bind_param("si", $_SESSION['Student_Id'], 5);
            if($stmt->execute()){
                echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully enrolled in this course!',
                    icon: 'success',
                    timer: 5000,
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
        else if(isset($Backend3)){
            $stmt = $conn->prepare("INSERT INTO student_courses (Student_Id, Course_Id) VALUES (?,?)");
            $stmt->bind_param("si", $_SESSION['Student_Id'], 6);
            if($stmt->execute()){
                echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully enrolled in this course!',
                    icon: 'success',
                    timer: 5000,
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
        echo "Error:" . $e->getMessage();
    }

?>