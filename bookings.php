<?php 
require('./components/nav_bar.php');
if(!isset($_SESSION['loggedIn'])){
  header("location:index.php");	
}
?>
  <main class = "container p-5">
    <h1>Bookings</h1>
  </main>
    <?php 
require('./components/footer.php')
?>