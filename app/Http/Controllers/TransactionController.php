<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TransactionController extends Controller
{
    public function index(){
        return view('admin-page.transactions.transaction');
    }
    public function detail(){
        return view('admin-page.transactions.detail');
    }

}
