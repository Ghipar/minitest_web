<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="{{asset('css/login.css')}}" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <div class="form sign-in">
      <h2>Login</h2>
      <p>Welocome to Insightful Ink</p>
      <label>
        <span>Email</span>
        <input type="email" />
      </label>
      <label>
        <span>Password</span>
        <input type="password" />
      </label>
      
     
      <button type="button" class="submit">Sign In</button>
 
    </div>
    <div class="sub-cont">
      <div class="img">
        <div class="img__text m--up">
          <h2>Hello, Friend!</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img__text m--in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img__btn">
          <span class="m--up">Registrasi</span>
          <span class="m--in">Login</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Register</h2>
        <label>
          <span>Username</span>
          <input type="text" />
        </label>
        <label>
          <span>Email</span>
          <input type="email" />
        </label>
        <label>
          <span>Password</span>
          <input type="password" />
        </label>
        <button type="button" class="submit">Sign Up</button>

      </div>
    </div>
  </div>
  
</header><!-- End Header -->


<!-- ======= Footer ======= -->


<!-- Template Main JS File -->
<script src="{{asset('js/login.js')}}"></script>

</body>
</html>

