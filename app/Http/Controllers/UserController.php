<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index(){
        if (request()->ajax()) {
            $data = User::all();
            return DataTables::of($data)->make(true);
        }
        return view('admin-page.users.user');
    }
}
