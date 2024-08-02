<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // メールの設定
    $to = "your-email@example.com"; // メールを受け取るアドレスに変更
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $body = "名前: $name\n";
    $body .= "メールアドレス: $email\n";
    $body .= "件名: $subject\n\n";
    $body .= "メッセージ:\n$message\n";

    // メール送信
    if (mail($to, $subject, $body, $headers)) {
        echo "メッセージが送信されました。";
    } else {
        echo "メッセージの送信に失敗しました。もう一度お試しください。";
    }
} else {
    echo "無効なリクエストです。";
}
?>
