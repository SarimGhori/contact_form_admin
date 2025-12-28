<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<h2>Contact Us</h2>

<form action="save_contact.php" method="POST">
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <textarea name="message" placeholder="Message" required></textarea><br><br>
    <button type="submit">Send</button>
</form>

</body>
</html>
