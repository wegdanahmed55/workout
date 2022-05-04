<html>
    <head>
        <link rel="stylesheet" href="./css/all.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/level's.css">
        <script src="./js/jquery-3.5.1.slim.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
    </head>

    <body >
        <!-- level page -->
        <!-- part1 -->
        <div class="addpagelevel">
            <div class="layer">
                <!-- navbar -->
                <nav class="navbar navbar-expand-lg  ">
                    <a class="navbarlogo" >WorkOut</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                    <div class="navcontant collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-link active"  href="{{url('/')}}" id="home">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="{{url('/fav')}}"  id="favorite" >favorite</a>
                    <a class="nav-link " href="{{url('/machine')}}" id="machine">Machine</a>
                    </div>
                    </div>
                   </nav>
                <!-- endnav -->
                <h2>Fitness Now</h2>
                <p>Let's do this</p>
            </div>
        </div>
        <!-- end part1 -->
        <!-- part2 -->
        <div class="levelpart shadow p-3 mb-5 rounded">
            <div class="box1">
                <img src="img/Logo01.png">
                <h3>Pure Strength</h3>
                <p>It is imperative that everyone maximises the time they spend exercising to help guarantee results from the commit ment put into achieving each goal.</p>
                <hr>
            </div>
            <div class="box2">
                <img src="img/Logo02.png">
                <h3>The Challenge</h3>
                <p>To provide a personalised health and fitness service that unlocks every individual’s true potential so they can achieve their desired goals.</p>
                <hr>
            </div>
            <div class="box3">
            <img src="img/Logo03.png">
            <h3>Our Mission</h3>
            <p>To become the most recognised independent fitness service provider amongst the large populations of both Bournemouth and Poole in Dorset.</p>
            <hr>
            </div>
        </div>
        <!-- endpart2 -->
        <!-- part3 -->
        <div class="chooselevel">
            <h2>CHOOSE LEVEL</h2>
            <div class="bt1">
            <a class=" shadow p-3 mb-5 rounded" href="{{url('/beginner')}}">BEGINNER</a>
            </div>
           <div class="bt2">
           <a class=" shadow p-3 mb-5 rounded" href="{{url('/intermediate')}}" id="inter"> INTERMEDIATE </a>
           </div>
            <div class="bt3">
            <a  class=" shadow p-3 mb-5 rounded" href="{{url('/advanced')}}" id="advanced" >ADVANCED</a>
            </div>
           
            <!-- <button class="bt1 shadow p-3 mb-5 rounded"type="button"  formaction="{{url('/beginner')}}" id="beginner"> BEGINNER</button> -->
          <hr>
            </form>
           
        </div>
        <!-- endpart3 -->
        <!-- part4 -->
        <div class="chooseworkout" ></div>
        <!-- end part4 -->
        <script src="./js/main.js"></script>
        <script src="./js/navigatinbar.js"></script>

    </body>
</html>