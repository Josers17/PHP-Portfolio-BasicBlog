<?php
include 'db.php';

$id = $_GET['id'] ?? 0;
$sql = "SELECT * FROM posts WHERE id=$id";
$result = $conn->query($sql);
$post = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?= $post ? htmlspecialchars($post['title']) : 'Post not found' ?></title>
</head>
<body>
  <?php if ($post): ?>
      <h1><?= htmlspecialchars($post['title']) ?></h1>
      <pre><?= htmlspecialchars($post['content']) ?></pre>
      <small>Published: <?= $post['created_at'] ?></small>
  <?php else: ?>
      <p>Post not found</p>
  <?php endif; ?>
</body>
</html>
