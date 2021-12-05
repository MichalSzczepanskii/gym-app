<?php

namespace App\Services\DataTables;

use App\Models\User;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Services\DataTable;

class ClientDataTable extends DataTable {
    
    public function ajax() {
        $dataTable = BaseDataTable::ajax($this->query())
            ->addColumn('action', function() {
                return view('components.table-actions');
            })
            ->rawColumns(['action']);

        return $dataTable->make(true);
    }

    public function query() {
        $rows = User::role(config('auth.roles.user_role'));
        return $this->applyScopes($rows);
    }
}