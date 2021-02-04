<nav id="nav">
      <ul class="left-ul">
        <li>
        <a href="#"id="log" class="nav__logo">CodeCraks</a>
        </li>
      </ul>
      <div class="empty"></div>
      <ul class="right-ul">
        <?php if(isset($_SESSION['userId'])): ?>
        <li><a href="logout.php" class="btn btn-sweet">Logout</a></li>
<?php else: ?>
<?php endif; ?>
       
      </ul>
    </nav>
    <script>$("#log").mouseenter(function() {
  $(this).text('<Code>Craks');
  }).mouseleave(function() {
  $(this).text('CodeCraks');
  });    </script>