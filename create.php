<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    $conn->query($sql);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Create Post</title>
</head>
<body>
  <h1>Create Post</h1>
  <form method="POST">
    <input type="text" name="title" placeholder="Title" required><br><br>
    <textarea name="content" placeholder="Content" required></textarea><br><br>
    <button type="submit">Save</button>
  </form>
</body>
</html>
