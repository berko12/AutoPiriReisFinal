<?php
session_start();
$_SESSION['login']=="";

session_unset();
$_SESSION['action1']="Çıkış Başarılı!";
?>
<script language="javascript">
document.location="login.php";
</script>
