<?php

namespace App\Services\DataTables;
use App\Models\UserCarnet;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use \Yajra\DataTables\Services\DataTable;

class UserCarnetDataTable extends DataTable {

    public function ajax() {
        $dataTable = BaseDataTable::ajax($this->query())
            ->editColumn('start_date', function ($row) {
                return $row->start_date ? with(new Carbon($row->start_date))->format('Y-m-d') : "";
            })
            ->filterColumn('start_date', function($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(user_carnets.start_date, '%Y-%m-%d') LIKE ?", ["%$keyword%"]);
            })
            ->editColumn('end_date', function ($row) {
                return $row->end_date ? with(new Carbon($row->end_date))->format('Y-m-d') : "";
            })
            ->filterColumn('end_date', function($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(user_carnets.end_date, '%Y-%m-%d') LIKE ?", ["%$keyword%"]);
            })
            ->addColumn('user.name', function($row) {
                return $row->user->first_name . " " . $row->user->last_name;
            })
            ->addColumn('action', function() {
                return view('components.table-actions');
            })
            ->rawColumns(['action']);


        return $dataTable->make(true);
    }

    public function query() {
        $rows = UserCarnet::with('user');
        return $this->applyScopes($rows);
    }

}