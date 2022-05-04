<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class levelsController extends Controller{
   public function getdate(){
        return view('levels');
    }
}