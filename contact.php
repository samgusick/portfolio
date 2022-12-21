<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Software Engineering Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    
    <link rel="stylesheet" href="nav.css" />
  </head>
  <body>
    <div class="container">
      <?php
        include 'header.php';
        include 'nav.php';

    // Check that the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Validate the form data
        $errors = array();
        if (empty($name)) {
        $errors[] = 'Name is required';
        }
        if (empty($email)) {
        $errors[] = 'Email is required';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email address';
        }
        if (empty($message)) {
        $errors[] = 'Message is required';
        }

        // If there are no errors, send the email
        if (empty($errors)) {
        // Recipient email address
        $to = 'sgusick@uvm.edu';

        // Email subject
        $subject = 'New message from ' . $name;

        // Email message
        $message = 'Name: ' . $name . "\n"
                . 'Email: ' . $email . "\n"
                . 'Message: ' . "\n" . $message;

        // Headers
        $headers = 'From: ' . $name . ' <' . $email . '>';

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            // Redirect to a thank-you page or display a success message
            header('Location: /portfolio2/contact.php');
            exit;
        } else {
            $errors[] = 'Failed to send email';
        }
        }
    }
      ?>
      <div class="main">
         <!-- Add your contact page content here -->
         <h1>Contact</h1>
        <p>If you have any questions or would like to work with me, please don't hesitate to reach out using the form below or through one of the following methods:</p>
        <ul>
          <li>Email: <a href="mailto:sammygusick@email.com">sammygusick@email.com</a></li>
          <li>Phone: 203-832-9139</li>
          <li>LinkedIn: <a href="#">Your LinkedIn Profile</a></li>
          <li>GitHub: <a href="#">Your GitHub Profile</a></li>
        </ul>
        <form action="/portfolio2/contact.php" method="post">
          <label for="name">Name:</label><br>
          <input type="text" id="name" name="name"><br>
          <label for="email">Email:</label><br>
          <input type="email" id="email" name="email"><br>
          <label for="message">Message:</label><br>
          <textarea id="message" name="message" rows="5"></textarea><br>
          <input type="submit" value="Send">
        </form> 

        <?php
            foreach ($errors as $key => $value) {
                echo "<p>$value</p>";
            }
        ?>

      </div>

      <?php
      include 'footer.php';
      ?>

    </div>
  </body>
</html>
