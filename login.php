
 <html>
 <head>
 <link rel="stylesheet" type="text/css" href="css.css">
 </head>
 <body>
 <h1>To Do Application - LOGIN</h1>
 <div class="account-wall">
 <img class="profile-img"
 src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
 alt="">
 <form method = "post" action="index.php" class="form-signin">
 <strong>Username:</strong><input type="test" name="username" value="" class="form-control"/><br><br>
 <strong>Password:</strong><input type="password" name="password" value="" class="form-control"/><br><br>
 <input type ="hidden" name="action" value="test_user"><br>
 <input type="submit" value="Login" class="btn btn-lg btn-primary btn-block"/>
 </form>
 <form method = "post" action = "register.php" class="form-signin">
 <input type = "submit" value = "Register" />
 </form>
 </div>
 </body>
 </html>
