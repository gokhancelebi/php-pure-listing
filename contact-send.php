<?php

require_once __DIR__ . '/libs/bootstrap.php';


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $db = gc_db(); // PDO instance

    $sql = "INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':message' => $message,
    ]);

    echo "Mesajınız başarıyla gönderildi.";

} else {
    echo "Lütfen tüm alanları doldurunuz.";
}