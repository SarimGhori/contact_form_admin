<?php
session_start();
include '../db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
}
?>

<h2>Contact Messages</h2>

<table border="1">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM contacts");
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?= $row['name']; ?></td>
    <td><?= $row['email']; ?></td>
    <td><?= $row['message']; ?></td>
    <td>
        <a href="delete.php?id=<?= $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>

<br>
<a href="logout.php">Logout</a>
