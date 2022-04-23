<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron;
use App\Models\about;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   
        public function index(){
            return view('frontend.main',[
                'b'   => Jumbotron::find(1),
                'a' => about::find(1)
            ]);
        }
    
}
