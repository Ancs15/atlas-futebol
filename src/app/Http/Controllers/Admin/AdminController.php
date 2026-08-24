<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

Class AdminController extends Controller {

    public function admin() {
        
        return view('admin.dashboard.dashboard');

    }

}