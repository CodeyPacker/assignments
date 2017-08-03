<?php
ini_set('display_errors', 1);
define ('TITLE', 'Login');
include('templates/header.html');

// Intro text
print '<h2>Login Form</h2>
  <p>Users who are logged will be able to view Emery\'s pictures.<br>
  email: me@example.com<br>
   password: testpass</p>';

  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Handle the form:
    if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {
      if ( (strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass') ) { // Correct!

        // Redirect the user to the welcome page
        ob_end_clean(); // Destroy the buffer!
        header('location: welcome.php');
        exit();

      } else { // Incorrect!
          print '<p>The submitted email address and password do not match those on the file!<br>Go back and try again.</p>';
      }
    } else { // Forgot a field
        print '<p>Please make sure you enter both an email address and a password!<br>Go back and try again.</p>';
    }

  } else { // Display the form.

      print '<form action="login.php"
      method="post">
      <p>Email Address: <input
      type="text" name="email" size="20"></p>
      <p>Password: <input type="password" name="password" size="20"></p>
      <p><input type="submit" name="submit" value="Log In!"></p>
      </form>';

  }

include('templates/footer.html');
?>
</body>
</html>
