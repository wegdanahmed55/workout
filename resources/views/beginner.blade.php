<html>
    <head>
        <link rel="stylesheet" href="./css/all.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/beginner.css">
        <script src="./js/jquery-3.5.1.slim.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- part1 -->

        <div class="level1" href="levels.blade.php" >
            <h2>BEGINNER</h2>
            <hr>
            <div class="chestl1">
            <a class="  p-3 mb-5"  href="{{url('/daysbeg')}}" >CHEST BEGINNER</a>
            </div>
            <div class="absl1">
            <a class=" p-3 mb-5 " href="{{url('/daybegabs')}}" >ABS BEGINNER</a>
            </div>
         <div class="arml1">
         <a class=" p-3 mb-5 "  href="{{url('/daybegarm')}}" >ARM BEGINNER</a>
         </div>
         <div class="legl1">
         <a class=" p-3 mb-5 " href="{{url('/daybegleg')}}" >LEG BEGINNER</a>
         </div>
          <div class="Shoulderl1">
          <a class="  p-3 mb-5 " href="{{url('/daybegback')}}" >Shoulder&BACK BEGINNER</a>
          </div>
          
        </div>
        <!-- endpart1 -->
    </body>
</html>