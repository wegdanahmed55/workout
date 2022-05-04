<html>

    <head>
        <link rel="stylesheet" href="./css/all.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/signup.css">
        <script src="./js/jquery-3.5.1.slim.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        
 <div class="signupscreen row">
  <div class="signup">
   <div class="formbox">
    <form  method="post" class="container">
    @csrf
      <input type="text" placeholder="User name" name="username" required>
       <br>
      <input type="text" placeholder="Email" name="usermail" required>
       <br>
       <input type="number" placeholder="Phone number" name="userphone" required>
       <br>
      <input type="password" placeholder=" Password" name="psw" required>
       <br>
      <button formaction="{{url('/')}}" type="submit">CREATE</button>
      </form>
      <div class="signin">
        <p>Already have an account?</p>
        <a  class="btn">Sign in</a>
          </div>
      </div>
   </div>
   <div class="imgbox">
    <img src="./img/image3.png" alt="workoutimg2">
     </div>
   </div>
    </body>
</html>