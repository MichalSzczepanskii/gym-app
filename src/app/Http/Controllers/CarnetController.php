<?php

namespace App\Http\Controllers;

use App\Http\Requests\Carnets\CarnetsRequest;
use App\Models\Carnet;

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

    public function add() {
        return view('carnets.store');
    }

    public function store(CarnetsRequest $request) {

        $carnet = Carnet::create($request->all());

        return redirect()
            ->route('carnets.index')
            ->with('success', __('dashboard.carnets.flashes.success.stored', [
                'name' => $carnet->name
            ]));
    }

    public function edit(Carnet $carnet) {
        $edit = true;
        return view(
            'carnets.store',
            compact('carnet', 'edit')
        );
    }

    public function update(CarnetsRequest $request, Carnet $carnet) {
        $carnet->fill($request->all())->save();
        return redirect()->route('carnets.index')
            ->with(
                'success',
                __(
                    $carnet->wasChanged()
                        ? 'dashboard.carnets.flashes.success.updated'
                        : 'dashboard.carnets.flashes.success.nothing-changed',
                    [
                        'name' => $carnet->name
                    ]
                )
            );
    }
}
