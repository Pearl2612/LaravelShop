<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
class VendorController extends Controller
{
    public function index() {
        return view('vendor.dashboard.dashboard');
    }
}
