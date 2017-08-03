<?php /* This is the welcome page. The user is redirected here after they successfully log in. */
// Set the page title and include the header file:
define('TITLE', 'Emery Dee');
include('templates/welcomeheader.html');

// Leave the php section to display html
?>

<p>Thanks for logging in! Now you can view her pictures.</p>
<h2>Emery's pic's</h2>
<div class="columns">
<div class="col-left">
  <img class="emerypic" src="images/emery1.jpg" alt="Emery">
  <img class="emerypic" src="images/emery2.jpg" alt="Emery">
  <img class="emerypic" src="images/emery3.jpg" alt="Emery">
  <img class="emerypic" src="images/emery4.jpg" alt="Emery">
</div> <!--.col-left-->
<div class="col-right">
  <img class="emerypic" src="images/emery5.jpg" alt="Emery">
  <img class="emerypic" src="images/emery6.jpg" alt="Emery">
  <img class="emerypic" src="images/emery7.jpg" alt="Emery">
  <img class="emerypic" src="images/emery8.jpg" alt="Emery">
</div> <!--.col-right-->
</div> <!--.colums -->
<?php include('templates/footer.html'); // Need the footer ?>
