    <?php
    include_once 'pdo.php';

    function addcontact($name, $email, $phone, $message)
    {
        $sql = "INSERT INTO contact (ten_ng_nhap, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
        return pdo_execute($sql);
    }
    ?>
