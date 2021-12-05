<?php

namespace App\Http\Controllers;

use App\Models\Carnet;
use Illuminate\Http\Request;

class CarnetController extends Controller
{
    public function index() {
       return view(
           'carnets.index',
           [
               'carnets' => Carnet::all(),
               'title' => __('dashboard.carnets.title'),
           ]
       );
    }
}
