<?php 

namespace App\Http\Controllers;
  

class UserController extends Controller
{
    

    public function __invoke()
    {
        return view('blog/index', ['name' => 'Damien']);
    }
}
