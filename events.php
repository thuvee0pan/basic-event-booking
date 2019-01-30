<?php 
require('./components/nav_bar.php');
if(!isset($_SESSION['loggedIn'])){
  header("location:index.php");	
}
?>
  <main class = "container p-5">
    <h1>Events</h1>
  </main>
    <?php 
require('./components/footer.php')
?>