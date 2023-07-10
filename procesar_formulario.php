<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['text']) && !empty($_POST['email']) && !empty($_POST['checkbox'])) {
        $text = $_POST['text'];
        $email = $_POST['email'];
        $checkbox = $_POST['checkbox'];
        $header = "From: noreply@example.com" . "\r\n";
        $header = "Reply-To: noreply@example.com" . "\r\n";
        $header = "X-Mailer: PHP/". phpversion();
        $mail = @mail($email,$text,$checkbox);
        if ($mail) {
            echo "<h4>Mail enviado con exito!</h4>";
        }
    }
}
?>
