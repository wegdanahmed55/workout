<html>
    <head>
        <link rel="stylesheet" href="./css/all.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/dayintleg.css">
        <script src="./js/jquery-3.5.1.slim.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="addbage">
         <div class="layer">
            <nav class="navbar navbar-expand-lg  ">
                <a class="navbarlogo" >WorkOut</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="navcontant collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link active" id="home" >Home <span class="sr-only">(current)</span></a>
                <a class="nav-link"  href="#" id="profile">Profile</a>
                <a class="nav-link"   id="level">level's</a>
                </div>
                </div>
               </nav>
             <h2>Days</h2>
         </div>
        </div>

        <div class="chooseaday">
            <h3>CHOOSE A DAY</h3>
            <hr>
            <div class="day">
            <p>Day1</p>
            <a href="{{url('/day1intleg')}}"><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="day">
            <p>Day2</p>
            <a href="{{url('/day2intleg')}}"><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="day">
            <p>Day3</p>
            <a href="{{url('/day3intleg')}}"><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="day">
            <p>Day4</p>
            <a href="{{url('/day4intleg')}}"><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="day">
            <p>Day5</p>
            <a href="{{url('/day5intleg')}}"><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="day">
            <p>Day6</p>
            <a href="{{url('/day6intleg')}}"><i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="day">
             <p>Day7</p>
             <a href="{{url('/day7intleg')}}"><i class="fas fa-chevron-right"></i></a>  
            </div>
        </div>
        

    </body>
</html>