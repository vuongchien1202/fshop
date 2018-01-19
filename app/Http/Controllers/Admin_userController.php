<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medels\Admin_users;

class Admin_userController extends Controller
{
     public function getlist()
   {
   		$data = Admin_users::paginate(10);
    	return view('back-end.admin_mem.list',['data'=>$data]);
   }

}
