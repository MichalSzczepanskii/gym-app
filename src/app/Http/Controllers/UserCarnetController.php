<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contracts\ContractsRequest;
use App\Models\Carnet;
use App\Models\User;
use App\Services\DataTables\UserCarnetDataTable;
use Illuminate\Http\Request;

class UserCarnetController extends Controller
{
    public function index(UserCarnetDataTable $dataTable) {
        return $dataTable->render('contracts.index');
    }

    public function dataTable(UserCarnetDataTable $dataTable) {
        return $dataTable->render('contracts.index');
    }

    public function add() {
        return view('contracts.store')
            ->with([
                'users' => User::role(config('auth.roles.user_role')),
                'carnets' => Carnet::all()
            ]);
    }

    public function store(ContractsRequest $request) {
        return;
    }
}
