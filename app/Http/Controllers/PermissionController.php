<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    public function permission() {
        dd('Access Denied! No Permission To Visit This Page!');
    }
}
