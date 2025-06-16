<?php
include 'db.php';

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if ($id) {
        $query = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    } else {
        $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    }

    mysqli_query($conn, $query);
    header("Location: index.html");
    exit();
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM users WHERE id=$id");
    header("Location: index.html");
    exit();
}
?>
