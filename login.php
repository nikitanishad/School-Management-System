
<?php include("header.php") ?>

  <section>
    <div class="center">
      <div class="main">
        <div class="user-pic">
         <i class="fa-solid fa-user"></i>
       </div>
       <form action="" method="$_POST">
        <div class="text-feild">
          <input type="text" name="email" required>
          <label for="">Your Email</label>
        </div>
        <div class="text-feild">
          <input type="password" name="password" id="password" required>
          <label for="">Your Password</label>
        </div>
       </form>
       <div class="login-btn">
           <button><a href="#">Login</a></button>
        </div>
      </div>
    </div>
  </section>

<?php include("footer.php") ?>
