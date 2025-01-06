<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index(){
        return view('admin-page.users.user');
    }
    public function detail(){
        return view('admin-page.users.detail');
    }
}
