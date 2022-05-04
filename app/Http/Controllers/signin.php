<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Firestore;
use Kreait\Firebase\ServiceAccount;
//require 'C:\xampp\htdocs\php\blog/vendor/autoload.php';

class FirebaseService
{
    public static function connect()
    {
    
        $firebase = (new Factory)->withServiceAccount(base_path(env('FIREBASE_CREDENTIALS')));
      $fir=  $firebase->createFirestore()->database()->collection('Users')->document('12222');
        return $fir;
    }
}


class signinController extends Controller{
   public function getdate(){

    echo"ji";
//     if(isset($_POST['Uemail'] )&& isset($_POST['psw']  ))
//     {
   
//      $database = FirebaseService::connect();
   
//      $user=$_POST['Uemail'];
//      $pasword=$_POST['psw'];
//    $database->set(["uemail"=>$user, "pasword"=>$pasword]);
//     echo $user;
//      // $database->set(["uemail"=>$_POST['Uemail']]);
  
//     }
    echo "xjj";
        return view('levels');
    }

    public function signin(){
        return view('signin');
    }
}