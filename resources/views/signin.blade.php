
<?php
use App\Http\Controllers\signin;
use Illuminate\Http\Request;
?>
<html>

    <head>
        <link rel="stylesheet" href="./css/all.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/signinstyle.css">
        <script src="./js/jquery-3.5.1.slim.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <div class="loginscreen row">
                <div class="imgbox">
                  <img src="./img/image1.jpg" alt="workoutimg1">
                </div>
                <div class="login">
                    <div class="formbox">
                      <form  method="post" class="container">
                        @csrf
                        <input type="text" placeholder="E-mail" name="Uemail"  required>
                        <br>
                        <input type="password" placeholder=" Password"  name="psw" required>
                        <br>
                        <div class="forgetps">
                          <a href="#"  class="btn">Forgot password?</a>
                        </div>
                        
                         <button  formaction="{{url('/indexsignin')}}" type="submit">sign in</button>
                         
                           <div class="conectmedia">
                            <p>or connect using</p>
                            <div class="facebookbt">
                              <a href="https://m.facebook.com/?locale=ar_AR" class="fb btn r">Facebook
                              </a>
                            </div>
                            <div class="googlebtn">
                              <a href="https://www.google.com/intl/ar/gmail/about/" class="google btn "> Google+
                              </a>
                            </div>
                           
                           </div>
                          
                          <div class="signup">
                        <p>Don't have an account?</p>
                        <a  class="btn">Sign up</a>
                          </div>
                        
                      </form>
                     
                   </div>
                  </div>
        </div>
    </body>
</html>