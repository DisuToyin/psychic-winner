<?php

$conn = mysqli_connect('localhost', 'disu', 'pass123', 'pizaa');
if (!$conn) {
    echo 'connection error: ' . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>

<?php include('templates/footer.php') ?>

</body>

</html>