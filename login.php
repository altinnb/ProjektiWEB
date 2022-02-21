<?php include 'hdft/header.php' ?>
<title>Sign In | FASHIONSHOP</title>
 <div class="loginform">
     <h1 class="singwlcm">Sign in to your account</h1>
     <h3 class="singwlcm1">Our brand new site is live. Please create a new account to explore this experience.</h3>
     <div class="emailpass">
        <h2 class="h2-login">Login</h2>
        <p class="p-login">If you have an account, please sign in with your email address.</p>
        <br>
      <form action="">
          <label for="email">Email address</label>
          <input id="email" type="email" required>
          <label for="email">Password</label>
          <input id="password" type="password" required>
          <button class="button-50" id="submit" onclick="login()">Sign In</button>
      </form>
    </div>
    <div class="signup">
        <h2 class="h2-login">Create account</h2>
        <p class="p-login">Creating an account has many benefits: check out faster, keep more<br> than one address, track orders and more.</p>
        <br>
        <form action="">
          <label>First Name</label>
          <input id="name" type="text" required>
          <label>Last Name</label>
          <input id="surname" type="text" required>
          <label for="email">Email address</label>
          <input id="email" type="email" required>
          <label for="email">Password</label>
          <input id="password" type="password" required>
          <button class="button-50" id="submit" onclick="signup()">Submit</button>
        </form>
    </div>
 </div>
 <?php include 'hdft/footer.php' ?>