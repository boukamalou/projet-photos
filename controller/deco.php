<?php
session_start();
unset($_SESSION["newsession"]);
session_destroy();
header('Location: ../index.php');