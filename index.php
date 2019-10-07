<?php
session_start();
include_once("../model/entity/user.php");
include_once("header.php");
include_once("nav.php");
?>
<?php
$user = $_SESSION["user"];
if (isset($user))
echo "Xin chào, tôi là " . $user;
else
    header("location:Login.php")
?>

<?php
include_once("footer.php"); ?>
