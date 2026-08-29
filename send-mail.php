<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request.'
    ]);
    exit;
}

$fullName = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($fullName === '' || $email === '' || $phone === '' || $message === '') {
    echo json_encode([
        'success' => false,
        'message' => 'Please fill all required fields.'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'success' => false,
        'message' => 'Please enter a valid email address.'
    ]);
    exit;
}

$fullNameEsc = htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8');
$emailEsc = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$phoneEsc = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$messageEsc = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ksgamingarena01@gmail.com';
    $mail->Password = 'qijbfnbianemkodb';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ],
    ];

    $mail->setFrom('ksgamingarena01@gmail.com', 'Digital Network Operator Installation of India (DNOIA)');
    $mail->addAddress('ks009232@gmail.com');
    $mail->addReplyTo($email, $fullName);

    $mail->isHTML(true);
    $mail->Subject = 'New Membership Form Submission';
    $mail->Body = "
        <div style='font-family: Arial, sans-serif; max-width: 650px; margin: auto; border: 1px solid #ddd; border-radius: 8px; overflow: hidden;'>
            <div style='background:#173E76; color:white; padding:20px;'>
                <h2 style='margin:0; font-size:22px;'>New Membership Form Submission</h2>
            </div>
            <div style='padding:25px;'>
                <table width='100%' cellpadding='10' cellspacing='0' style='border-collapse:collapse; font-size:14px;'>
                    <tr>
                        <td style='font-weight:bold; border-bottom:1px solid #eee;'>Full Name:</td>
                        <td style='border-bottom:1px solid #eee;'>{$fullNameEsc}</td>
                    </tr>
                    <tr>
                        <td style='font-weight:bold; border-bottom:1px solid #eee;'>Email:</td>
                        <td style='border-bottom:1px solid #eee;'>{$emailEsc}</td>
                    </tr>
                    <tr>
                        <td style='font-weight:bold; border-bottom:1px solid #eee;'>Phone:</td>
                        <td style='border-bottom:1px solid #eee;'>{$phoneEsc}</td>
                    </tr>
                    <tr>
                        <td style='font-weight:bold; vertical-align:top;'>Message:</td>
                        <td>{$messageEsc}</td>
                    </tr>
                </table>
            </div>
        </div>
    ";

    $mail->send();

    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your form has been submitted successfully.'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Sorry, your message could not be sent. Please try again.'
    ]);
}