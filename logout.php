<?php
session_start();
session_destroy();
// Redirection push to the login page:
header('Location: index.html');
?>
