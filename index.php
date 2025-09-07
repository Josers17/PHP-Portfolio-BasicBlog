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
  <?php while ($row = $result->fetch_assoc()): ?>
      <h2>
        <a href="post.php?id=<?= $row['id'] ?>">
          <?= $row['title'] ?>
        </a>
      </h2>
      <p><?= substr($row['content'], 0, 100) ?>...</p>
  <?php endwhile; ?>
</body>
</html>
