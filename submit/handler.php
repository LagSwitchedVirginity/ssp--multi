<?php
include_once "config.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_secret_key;
    $recaptcha_response = $_POST['recaptcha_response'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);
    // Take action based on the score returned:
    if ($recaptcha->score >= $recaptcha_score_min) {
        header("Location: success.php");
    } else {
        die("Google doesn't like you :(");
    }
} ?>