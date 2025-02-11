<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'config.php'; // Store credentials here

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'mail.insikafoundation.co.za'; // Your hosting SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'info@insikafoundation.co.za';
    $mail->Password = SMTP_PASSWORD; // Get from config.php
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 465;

    // Recipients
    $mail->setFrom('info@insikafoundation.co.za', 'Insika Foundation');
    $mail->addAddress($to);
    $mail->addReplyTo($email);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $email_message;

    $mail->send();
    $response = ['success' => true, 'message' => 'Message sent successfully'];

} catch (Exception $e) {
    $response = ['success' => false, 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"];
}

header('Content-Type: application/json');
echo json_encode($response);
?>