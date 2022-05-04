<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\levels;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
use Kreait\Firebase\Factory;
use Kreait\Firebase\Firestore;
use Kreait\Firebase\ServiceAccount;
//require 'C:\xampp\htdocs\php\blog/vendor/autoload.php';

// if(isset($_POST['Uemail'] )&& isset($_POST['psw']  ))
//   {
 
//    $database = FirebaseService::connect();
 
//    $user=$_POST['Uemail'];
//    $pasword=$_POST['psw'];
//  $database->set(["uemail"=>$user, "pasword"=>$pasword]);
//   echo $user;
//    // $database->set(["uemail"=>$_POST['Uemail']]);

//   }

// Route::post('/signin', function(){
//   if(isset($_POST['Uemail'] )&& isset($_POST['psw']  ))
//   {
 
//    $database = FirebaseService::connect();
 
//    $user=$_POST['Uemail'];
//    $pasword=$_POST['psw'];
//  $database->set(["uemail"=>$user, "pasword"=>$pasword]);
//   echo $user;
//    // $database->set(["uemail"=>$_POST['Uemail']]);

//   }
//   return View('signin');
// });
class FirebaseService
{
  //put data in firestore in collection users
    public static function connect()
    {
      $firebase = (new Factory)->withServiceAccount(base_path(env('FIREBASE_CREDENTIALS')));
      $fir=  $firebase->createFirestore()->database()->collection('Users')->newDocument();
      return $fir;
    }
    //put data in firestore in collection workout
    public static function workoutdata()
    { 
      $firebase = (new Factory)->withServiceAccount(base_path(env('FIREBASE_CREDENTIALS')));
      $fir=  $firebase->createFirestore()->database()->collection('WorkOut')->document('13pXc9QNdJ0Ss6fhj7tM');

      return $fir;
    }

    

  
      //put get in firestore from collection users for s  user
    public static function getfunction($user,$password)
    {
      $state=False;
      $firebase = (new Factory)->withServiceAccount(base_path(env('FIREBASE_CREDENTIALS')));
      $fir=  $firebase->createFirestore()->database()->collection('Users');
    
      $query = $fir->where('usermail', '=', $user);
      $snapshot = $query->documents();
      foreach ($snapshot as $value) {
       $pass= $value->get('pasword');
       if($pass==$password)
       { $state=True;}
      }
      return $state;
    }
}
// signin button
Route::get('/signin',function()
{
  return View('signin');
});
// creat button
Route::get('/signup',function()
{
  return View('signup');
});
// nav home page
Route::get('/', function () {
    return view('index');
}); 
// nav level page
Route::get('/levels', function(){
  return View('levels');
});
// nav machine
Route::get('/machine', function(){
  return View('machine');
});
// nav favourite page
Route::get('/fav', function(){

  return View('fav');
});
// button beginner page
Route::get('/beginner', function(){
  return View('beginner');
});
// button intermediate page
Route::get('/intermediate', function(){

  return View('intermediate');
});
// button advanced page
Route::get('/advanced', function(){

  return View('advanced');
});


// beginner part
// button days beginner chist page
Route::get('/daysbeg', function(){

  return View('daysbeg');
});
// button days beginner arm page
Route::get('/daybegarm', function(){

  return View('daybegarm');
});
// button days beginner abs page
Route::get('/daybegabs', function(){

  return View('daybegabs');
});
// button days beginner leg page
Route::get('/daybegleg', function(){

  return View('daybegleg');
});
// button days beginner chest page
Route::get('/daybegback', function(){

  return View('daybegback');
});
// intermadiate  part

// button days intermediate chist page
Route::get('/dayintchest', function(){

  return View('dayintchest');
});
// button days intermediate leg page
Route::get('/dayintleg', function(){

  return View('dayintleg');
});
// button days intermediate abs page
Route::get('/dayintabs', function(){

  return View('dayintabs');
});
// button days intermediate back page
Route::get('/dayintback', function(){

  return View('dayintback');
});
// button days intermediate arm page
Route::get('/dayintarm', function(){

  return View('dayintarm');
});


// button days advanced chist page
Route::get('/dayadvchest', function(){

  return View('dayadvchest');
});
// button days advanced leg page
Route::get('/dayadvleg', function(){

  return View('dayadvleg');
});
// button days advanced abs page
Route::get('/dayadvabs', function(){

  return View('dayadvabs');
});
// button days advanced back page
Route::get('/dayadvback', function(){

  return View('dayadvback');
});
// button days advanced arm page
Route::get('/dayadvarm', function(){

  return View('dayadvarm');
});


// part beginner

// button days beginner chest page
Route::get('/day1begchest', function(){

  return View('day1begchest');
});
// button days beginner chest page
Route::get('/day2begchest', function(){

  return View('day2begchest');
});
// button days beginner chest page
Route::get('/day3begchest', function(){

  return View('day3begchest');
});
// button days beginner chest page
Route::get('/day4begchest', function(){

  return View('day4begchest');
});
// button days beginner chest page
Route::get('/day5begchest', function(){

  return View('day5begchest');
});
// button days beginner chest page
Route::get('/day6begchest', function(){

  return View('day6begchest');
});
// button days beginner chest page
Route::get('/day7begchest', function(){

  return View('day7begchest');
});



// button days beginner leg page
Route::get('/day1begleg', function(){

  return View('day1begleg');
});
// button days beginner leg page
Route::get('/day2begleg', function(){

  return View('day2begleg');
});
// button days beginner leg page
Route::get('/day3begleg', function(){

  return View('day3begleg');
});
// button days beginner leg page
Route::get('/day4begleg', function(){

  return View('day4begleg');
});
// button days beginner leg page
Route::get('/day5begleg', function(){

  return View('day5begleg');
});
// button days beginner leg page
Route::get('/day6begleg', function(){

  return View('day6begleg');
});
// button days beginner leg page
Route::get('/day7begleg', function(){

  return View('day7begleg');
});






// button days beginner back page
Route::get('/day1begback', function(){

  return View('day1begback');
});
// button days beginner back page
Route::get('/day2begback', function(){

  return View('day2begback');
});
// button days beginner back page
Route::get('/day3begback', function(){

  return View('day3begback');
});
// button days beginner back page
Route::get('/day4begback', function(){

  return View('day4begback');
});
// button days beginner back page
Route::get('/day5begback', function(){

  return View('day5begback');
});
// button days beginner back page
Route::get('/day6begback', function(){

  return View('day6begback');
});
// button days beginner back page
Route::get('/day7begback', function(){

  return View('day7begback');
});






// button days beginner arm page
Route::get('/day1begarm', function(){

  return View('day1begarm');
});
// button days beginner arm page
Route::get('/day2begarm', function(){

  return View('day2begarm');
});
// button days beginner arm page
Route::get('/day3begarm', function(){

  return View('day3begarm');
});
// button days beginner arm page
Route::get('/day4begarm', function(){

  return View('day4begarm');
});
// button days beginner arm page
Route::get('/day5begarm', function(){

  return View('day5begarm');
});
// button days beginner arm page
Route::get('/day6begarm', function(){

  return View('day6begarm');
});
// button days beginner arm page
Route::get('/day7begarm', function(){

  return View('day7begarm');
});



// button days beginner abs page
Route::get('/day1begabs', function(){

  return View('day1begabs');
});
// button days beginner abs page
Route::get('/day2begabs', function(){

  return View('day2begabs');
});
// button days beginner abs page
Route::get('/day3begabs', function(){

  return View('day3begabs');
});
// button days beginner abs page
Route::get('/day4begabs', function(){

  return View('day4begabs');
});
// button days beginner abs page
Route::get('/day5begabs', function(){

  return View('day5begabs');
});
// button days beginner abs page
Route::get('/day6begabs', function(){

  return View('day6begabs');
});
// button days beginner abs page
Route::get('/day7begabs', function(){

  return View('day7begabs');
});




// button days intermadiate abs page
Route::get('/day1intabs', function(){

  return View('day1intabs');
});
Route::get('/day2intabs', function(){

  return View('day2intabs');
});
Route::get('/day3intabs', function(){

  return View('day3intabs');
});
Route::get('/day4intabs', function(){

  return View('day4intabs');
});
Route::get('/day5intabs', function(){

  return View('day5intabs');
});
Route::get('/day6intabs', function(){

  return View('day6intabs');
});
Route::get('/day7intabs', function(){

  return View('day7intabs');
});



// button days intermadiate arm page
Route::get('/day1intarm', function(){

  return View('day1intarm');
});
Route::get('/day2intarm', function(){

  return View('day2intarm');
});
Route::get('/day3intarm', function(){

  return View('day3intarm');
});
Route::get('/day4intarm', function(){

  return View('day4intarm');
});
Route::get('/day5intarm', function(){

  return View('day5intarm');
});
Route::get('/day6intarm', function(){

  return View('day6intarm');
});
Route::get('/day7intarm', function(){

  return View('day7intarm');
});


// button days intermadiate leg page
Route::get('/day1intleg', function(){

  return View('day1intleg');
});
Route::get('/day2intleg', function(){

  return View('day2intleg');
});
Route::get('/day3intleg', function(){

  return View('day3intleg');
});
Route::get('/day4intleg', function(){

  return View('day4intleg');
});
Route::get('/day5intleg', function(){

  return View('day5intleg');
});
Route::get('/day6intleg', function(){

  return View('day6intleg');
});
Route::get('/day7intleg', function(){

  return View('day7intleg');
});



// button days intermadiate back page
Route::get('/day1intback', function(){

  return View('day1intback');
});
Route::get('/day2intback', function(){

  return View('day2intback');
});
Route::get('/day3intback', function(){

  return View('day3intback');
});
Route::get('/day4intback', function(){

  return View('day4intback');
});
Route::get('/day5intback', function(){

  return View('day5intback');
});
Route::get('/day6intback', function(){

  return View('day6intback');
});
Route::get('/day7intback', function(){

  return View('day7intback');
});


// button days intermadiate chest page
Route::get('/day1intchest', function(){

  return View('day1intchest');
});
Route::get('/day2intchest', function(){

  return View('day2intchest');
});
Route::get('/day3intchest', function(){

  return View('day3intchest');
});
Route::get('/day4intchest', function(){

  return View('day4intchest');
});
Route::get('/day5intchest', function(){

  return View('day5intchest');
});
Route::get('/day6intchest', function(){

  return View('day6intchest');
});
Route::get('/day7intchest', function(){

  return View('day7intchest');
});









// advanced part

// button days advanced abs page
Route::get('/day1advabs', function(){
  $datab = FirebaseService::workoutdata();
 echo $datab->getSnapshot();
  // foreach($datab as $s){
  // echo;
  // return View('day1advabs',["image"=>$datab['image'],"text"=>$datab['text']]);
  return View('day1advabs');
});


Route::get('/day2advabs', function(){
  return View('dday2advabs');
});
Route::get('/day3advabs', function(){

  return View('day3advabs');
});
Route::get('/day4advabs', function(){

  return View('day4advabs');
});
Route::get('/day5advabs', function(){

  return View('day5advabs');
});
Route::get('/day6advabs', function(){

  return View('day6advabs');
});
Route::get('/day7advabs', function(){

  return View('day7advabs');
});



// button days advanced arm page
Route::get('/day1advarm', function(){

  return View('day1advarm');
});
Route::get('/day2advarm', function(){

  return View('day2advarm');
});
Route::get('/day3advarm', function(){

  return View('day3advarm');
});
Route::get('/day4advarm', function(){

  return View('day4advarm');
});
Route::get('/day5advarm', function(){

  return View('day5advarm');
});
Route::get('/day6advarm', function(){

  return View('day6advarm');
});
Route::get('/day7advarm', function(){

  return View('day7advarm');
});


// button days advanced leg page
Route::get('/day1advleg', function(){

  return View('day1advleg');
});
Route::get('/day2advleg', function(){

  return View('day2advleg');
});
Route::get('/day3advleg', function(){

  return View('day3advleg');
});
Route::get('/day4advleg', function(){

  return View('day4advleg');
});
Route::get('/day5advleg', function(){

  return View('day5advleg');
});
Route::get('/day6advleg', function(){

  return View('day6advleg');
});
Route::get('/day7advleg', function(){

  return View('day7advleg');
});



// button days advanced back page
Route::get('/day1advback', function(){

  return View('day1advback');
});
Route::get('/day2advback', function(){

  return View('day2advback');
});
Route::get('/day3advback', function(){

  return View('day3advback');
});
Route::get('/day4advback', function(){

  return View('day4advback');
});
Route::get('/day5advback', function(){

  return View('day5advback');
});
Route::get('/day6advback', function(){

  return View('day6advback');
});
Route::get('/day7advback', function(){

  return View('day7advback');
});


// button days advanced chest page
Route::get('/day1advchest', function(){

  return View('day1advchest');
});
Route::get('/day2advchest', function(){

  return View('day2advchest');
});
Route::get('/day3advchest', function(){

  return View('day3advchest');
});
Route::get('/day4advchest', function(){

  return View('day4advchest');
});
Route::get('/day5advchest', function(){

  return View('day5advchest');
});
Route::get('/day6advchest', function(){

  return View('day6advchest');
});
Route::get('/day7advchest', function(){

  return View('day7advchest');
});









// profile page
Route::get('/profile',function()
{
  return view('profile');
});


Route::post('/indexsignin',function()
{
  $datab = FirebaseService::getfunction($_POST['Uemail'] ,$_POST['psw'] );
 echo  $datab;
if($datab==1)
  return view('indexsignin');
  else
   return back();
}

);

Route::post('/',function()
{if(isset($_POST['username'] )&& isset($_POST['usermail']  )&& isset($_POST['userphone']  ) && isset($_POST['psw']  ))
  {
 
   $database = FirebaseService::connect();
 
   $user=$_POST['username'];
   $usermail=$_POST['usermail'];
   $userphone=$_POST['userphone'];
   $pasword=$_POST['psw'];
 $database->set(["uemail"=>$user,"usermail"=>$usermail,"userphone"=>$userphone, "pasword"=>$pasword]);
   // $database->set(["uemail"=>$_POST['Uemail']]);

  }
  return view('index');

});
