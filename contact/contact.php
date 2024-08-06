<?php
$title = "Contact Us - Your Website";
$description = "Get in touch with us.";
$keywords = "contact, get in touch, email";
include_once '../includes/header.php';
?>
<main>
    <h1>Contact Us</h1>
    <form action="contact_process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Submit">
    </form>
</main>
<?php include_once '../includes/footer.php'; ?>
