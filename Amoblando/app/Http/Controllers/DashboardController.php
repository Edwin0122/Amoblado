<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SofaCama;

class DashboardController extends Controller
{
    public function index(){
    return view('modules.dashboard.index');
    }

    public function perfil(){
        return view('modules.dashboard.perfil');
    }
}
