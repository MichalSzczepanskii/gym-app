<?php

namespace App\Http\Controllers;

use App\Http\Requests\Clients\ClientsRequest;
use App\Models\User;
use App\Services\DataTables\ClientDataTable;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ClientController extends Controller
{
    public function index(ClientDataTable $dataTable) {
        return $dataTable->render('clients.index');
    }

    public function dataTable(ClientDataTable $dataTable) {
        return $dataTable->render('clients.index');
    }

    public function add() {
        return view('clients.store');
    }

    public function store(ClientsRequest $request) {
        $user = User::create($request->all());
        $userRole = Role::findByName(config('auth.roles.user_role'));
        $user->assignRole($userRole);
        return redirect()
            ->route('clients.index')
            ->with('success', __('dashboard.clients.flashes.success.stored', [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
            ]));
    }

    public function edit(User $client) {
        $edit = true;
        return view(
            'clients.store',
            compact('client','edit')
        );
    }

    public function update(ClientsRequest $request, User $client) {
        $client->fill($request->all())->save();
        return redirect()->route('clients.index')
            ->with(
                'success',
                __(
                    $client->wasChanged()
                        ? 'dashboard.clients.flashes.success.updated'
                        : 'dashboard.clients.flashes.success.nothing-changed',
                    [
                        'first_name' => $client->first_name,
                        'last_name' => $client->last_name,
                    ]
                )
            );
    }
}
