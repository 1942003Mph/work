<?php

namespace App\Http\Controllers\Admin;

use App\Models\followup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    function index() {

       return view('admin.layout.master');

    }
}
// $ee = followup::find(1);
// dd($ee->employee);