<?
session_start();
session_unset();
session_destroy();
?>
<script>
    alert("You are successfully logged out!!!");
    location.replace("../car_rent.php")
</script>
<?php
exit();
?>