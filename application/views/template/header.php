<header>
   <div class="topnav">
      <a class="active" onclick="reload()" href="">Home</a>
      <a href="jual.php">Jual</a>
      <?php
            if (empty($_SESSION['id_user'])){
               echo '<a href="login.php" style="float: right;">login</a>';
            }

            else {
               echo '<a href="proses/logout.php" style="float: right;">Logout</a>';
            } ?>
      <div class="search-container">
            <form action="/action_page.php">
               <input type="text" placeholder="Search.." name="search">
               <button type="submit"><i class="fa fa-search"></i></button>
            </form>

      </div>
   </div>
</header>