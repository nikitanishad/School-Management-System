
<?php include("header.php") ?>

  <section>
    <div class="center">
      <div class="main">
        <div class="user-pic">
         <i class="fa-solid fa-user"></i>
       </div>
       <form action="actions/login.php" method="POST" id="myForm">
        <div class="text-field">
          <input type="text" name="email" required>
          <label for="">Your Email</label>
        </div>
        <div class="text-field">
          <input type="password" name="password" id="password" required>
          <label for="">Your Password</label>
        </div>
       </form>
       <div class="login-btn">
           <button name="login" onclick="myFunction()">Login</button>
        </div>
      </div>
    </div>
  </section>

<?php include("footer.php") ?>
