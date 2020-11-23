<?php
session_start();
$_SESSION['timeout'] = time();
if ($_SESSION['timeout'] + 10 * 60 < time()) {
    session_destroy();
}
?>