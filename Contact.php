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

    $ContactName = $_POST['ContactName'];
    $ContactEmail = $_POST['ContactEmail'];
    $ContactMessage = $_POST['ContactMessage'];


    if(isset($_POST['ContactSubmit']) || $_SERVER['REQUEST_METHOD'] == 'POST'){

        
        $ContactName = filter_input(INPUT_POST, 'ContactName', FILTER_SANITIZE_STRING);
        $ContactEmail = filter_input(INPUT_POST, 'ContactEmail', FILTER_SANITIZE_EMAIL);
        $ContactEmail = filter_input(INPUT_POST, 'ContactEmail', FILTER_VALIDATE_EMAIL);
        $ContactMessage = filter_input(INPUT_POST, 'ContactMessage', FILTER_SANITIZE_STRING);

        $stmt = $conn->prepare("INSERT INTO contact (Name, Email, Message) VALUES (?,?,?)");
        $stmt->bind_param("sss", $ContactName, $ContactEmail, $ContactMessage);
        if($stmt->execute()){
            echo "<script>
            Swal.fire({
                title: 'Message Sent!',
                text: 'Data Successfully Collected! You will hear from us soon. Thank you for contacting us.',
                icon: 'success',
                timer: 4000,
                showConfirmButton: false
            }).then(function() {
                window.location.href = 'Contact.html'; // Redirect to your login page URL
            });
            </script>";
        }
        else{

            echo "<script>
            Swal.fire({
                title: 'Error!',
                text: 'An error occurred while sending your message. Please try again later.',
                icon: 'error',
                timer: 4000,
                showConfirmButton: false
            }).then(function() {
                window.location.href = 'Contact.html'; // Redirect to your login page URL
            });
            </script>";
        }
    }

?>

</body>
</html>