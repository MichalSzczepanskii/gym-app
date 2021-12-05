<?php

namespace App\Http\Controllers;

use App\Services\DataTables\UserCarnetDataTable;
use Illuminate\Http\Request;

class UserCarnetController extends Controller
{
    public function index(UserCarnetDataTable $dataTable) {
        return $dataTable->render('user_carnets.index');
    }

    public function dataTable(UserCarnetDataTable $dataTable) {
        return $dataTable->render('user_carnets.index');
    }
}
