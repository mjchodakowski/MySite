<?php

session_start();
unset($_SESSION['user']);
session_destroy();
header("Location: http://127.0.0.1/site/sendfile/index.php");