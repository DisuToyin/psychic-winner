<?php
//check is data is sent to the server
if (isset($_POST['submit'])) {
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['title']);
    // echo htmlspecialchars($_POST['ingredients']);

    if (empty($_POST['email'])) {
        echo 'An email is required <br/>';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'email must be a valid email address';
        }
    }

    if (empty($_POST['title'])) {
        echo 'An title is required <br/>';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z \s]+$/', $title)) {
            echo 'Title must be letters only';
        }
    }

    if (empty($_POST['ingredients'])) {
        echo 'An ingredients is required <br/>';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^[a-zA-Z \s]+$/', $ingredients)) {
            echo 'ingredients must be letters only';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>

<section class="container grey-text">
    <h4 class="center">
        Add a Pizza
    </h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>

    </form>
</section>

<?php include('templates/footer.php') ?>

</body>

</html>