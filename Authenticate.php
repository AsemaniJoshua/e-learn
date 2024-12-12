<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $recaptchaResponse = $_POST['g-recaptcha-response'];
    // $secretKey = 'YOUR_SECRET_KEY';
    $userIp = $_SERVER['REMOTE_ADDR'];
    $verificationUrl = "https://www.google.com/recaptcha/api/siteverify?secret=6LcyQWsqAAAAAMuqgUKGQy67lB5W2L2FT2Aqt8L9&response={$recaptchaResponse}&remoteip={$userIp}";

    $response = file_get_contents($verificationUrl);
    $responseData = json_decode($response);

    if ($responseData->success) {
        echo "<script>
            Swal.fire({
                title: 'Success!',
                text: 'reCAPTCHA verified! Wait while we login you in.',
                icon: 'success',
                timer: 2000,
                showConfirmButton: false
            }).then(function() {
                window.location.href = 'AuthenticateLogin.php'; // Replace with your login page URL
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                title: 'Error!',
                text: 'reCAPTCHA verification failed. Please try again.',
                icon: 'error'
                timer: 2000,
            }).then(function() {
                window.history.back();
            });
        </script>";
    }
}
?>
