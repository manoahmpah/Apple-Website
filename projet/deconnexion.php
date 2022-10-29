<?php
session_start();
if (isset($_POST['Se_deconnecter'])) {
    session_destroy();
    header("Location:Account.php");
}
