<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="./index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./pythons.php">Pythons</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./sketches.php">Sketches</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" href="./movies.php">Movies</a>
  </li> 
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./live.php">Live </a>
  </li>
</li>
</li>
<?php
if (!isset($_SESSION['loggedin'])) { ?>
   <li class="nav-item">
    <a class="nav-link" href="./login.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./register.php">Register</a>
  </li>

   <?php } else { ?>
  <li class="nav-item">
    <a class="nav-link" href="./logout.php">Logout</a>
    </li>
 <?php }  ?>
   <?php
if (isset($_SESSION['admin'])) {
   if ($_SESSION['admin']=="true") { ?>
   <li class="nav-item">
    <a class="nav-link" href="./admin.php">Admin</a>
  </li>
       
<?php   } 
} ?>
<?php if (isset($_SESSION['secret'])) {
   if ($_SESSION['secret']=="true") { ?>
   <li class="nav-item">
    <a class="nav-link" href="./reward.php">Reward</a>
  </li>
   <?php } } ?>
   <?php if (isset($_SESSION['premium'])) {
   if ($_SESSION['premium']=="true") { ?>
   <li class="nav-item">
    <a class="nav-link" href="./premiumdashboard.php">Premium Features</a>
  </li>
   <?php } } ?>
</ul>