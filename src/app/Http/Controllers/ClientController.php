<?php

namespace App\Http\Controllers;

use App\Services\DataTables\ClientDataTable;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(ClientDataTable $dataTable) {
        return $dataTable->render('clients.index');
    }

    public function dataTable(ClientDataTable $dataTable) {
        return $dataTable->render('clients.index');
    }
}
