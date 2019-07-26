<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="./secret.php">Home</a>
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

<?php
if (!isset($_SESSION['loggedin'])) { ?>
   <li class="nav-item">
    <a class="nav-link" href="./login.php">Login</a>
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
  
</ul>