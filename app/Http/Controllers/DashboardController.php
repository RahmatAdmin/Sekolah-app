<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show() {
        return view('admin.dashboard');
    }

    public function set() {
        return view('admin.another');
    }

    public function pegawai() {
        return view('teachers.pegawai');
    }
}
