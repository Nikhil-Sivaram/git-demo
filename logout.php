<?php
session_start();
session_destroy();
// Redirection to the login page:
header('Location: index.html');
?>