<?php
include 'db.php';

$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>My Blog</title>
</head>
<body>
  <h1>My Blog</h1>

  <p><a href="create.php">New Post</a></p>

  <?php if ($result->num_rows > 0): ?>
  <?php while ($row = $result->fetch_assoc()): ?>
      <h2>
        <a href="post.php?id=<?= $row['id'] ?>">
          <?= $row['title'] ?>
        </a>
      </h2>
      <p><?= substr($row['content'], 0, 100) ?>...</p>
  <?php endwhile; ?>
  <?php else: ?>
      <p>No posts yet. <a href="create.php">Create one</a></p>
  <?php endif; ?>
</body>
</html>
