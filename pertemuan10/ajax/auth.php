<<<<<<< HEAD
<?php
    // Membuat Token Keamanan Ajax Request (Csrf Token)
    session_start();
    if(empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
=======
<?php
    // Membuat Token Keamanan Ajax Request (Csrf Token)
    session_start();
    if(empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
>>>>>>> e22765833210c7ed994a68d514f436d60f4db267
?>