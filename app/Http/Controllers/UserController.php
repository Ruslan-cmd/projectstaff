<?php

namespace App\Http\Controllers;

use App\Models\Polzovatel;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function test()
        {
            $polzovatel = Polzovatel::find(1);
            dd($polzovatel->name);
         }
         public function create(){



         }
}
