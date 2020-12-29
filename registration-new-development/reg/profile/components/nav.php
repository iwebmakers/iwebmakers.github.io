<nav id="nav">
      <ul class="left-ul">
        <li>
          <a href="dashboard.php"
            ><img src="assets/images/logo.png" alt="Logo not found" class="logo"
          /></a>
        </li>
      </ul>
      <div class="empty"></div>
      <ul class="right-ul">
        <?php if(isset($_SESSION['userId'])): ?>
        <li><a href="logout.php" class="btn btn-sweet">Logout</a></li>
<?php else: ?>
<li><a href="login.php" class="btn btn-sweet">Login</a></li>
<li><a href="index.php" class="btn btn-outline">Sign Up</a></li>
<?php endif; ?>
       
      </ul>
    </nav>