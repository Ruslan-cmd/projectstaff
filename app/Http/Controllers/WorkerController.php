<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
   public function create(Request $request){
       //dd($request);
   }
   public function show(){
      // echo phpinfo();
       return view('create-new-worker-form');
   }
}
