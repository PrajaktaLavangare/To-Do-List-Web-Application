  <html>
  <head>
  <link rel="stylesheet" type="text/css" href="css.css">
  </head>
  <body>
  <marquee><h1>Sign Up</h1></marquee>
  <div class="account-wall">
  <form method = 'post' action = 'index.php' class="form-signin">
  <input type="text" name='first_name' class="form-control" placeholder="first name"/> <br><br>
  <input type="text" name="last_name" class="form-control" placeholder="last name"/> <br> <br>
  <input type='text' name="email" value="" class="form-control" placeholder="email"/> <br> <br>
  <input type="text" name="username" value="" class="form-control" placeholder="username"/> <br> <br>
  <input type='password' name="password" value="" placeholder="password" class="form-control"/> <br></br>
  <input type='text' name='phone_number' value="" placeholder="contact" class="form-control"/> <br> <br>
  <input type='text' name='birthday' class="form-control" placeholder="birthday"/> <br> <br>
  <input type='text' name='gender'  class="form-control" placeholder="gender"/> <br> <br>
  <input type="hidden" name="action" value="register">
  <br>
  <input type="submit" value="Register" />
  </form>
  </div>
  </body>
  </html>
