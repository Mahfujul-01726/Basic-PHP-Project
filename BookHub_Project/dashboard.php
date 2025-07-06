<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}
include 'includes/db.php';

$books = $conn->query("SELECT * FROM books");
?>

<h2>Welcome, <?php echo $_SESSION['name']; ?>!</h2>
<a href="auth/logout.php">Logout</a>

<h3>Book List:</h3>
<ul>
<?php while($row = $books->fetch_assoc()): ?>
    <li>
        <strong><?php echo $row['title']; ?></strong> by <?php echo $row['author']; ?><br>
        <?php echo $row['description']; ?>
    </li>
<?php endwhile; ?>
</ul>