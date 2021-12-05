<?php

namespace App\Services\DataTables;

use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class BaseDataTable {

    public static function ajax($thisQuery) {
        return DataTables::eloquent($thisQuery)
            ->editColumn('created_at', function ($row) {
                return $row->created_at ? with(new Carbon($row->created_at)) -> format('Y-m-d') : "";
            })
            ->filterColumn('created_at', function($query, $keyword) use ($thisQuery) {
                $query->whereRaw("DATE_FORMAT(". $thisQuery->first()->getTable().".created_at, '%Y-%m-%d') LIKE ?", ["%$keyword%"]);
            })
            ->editColumn('updated_at', function ($row) {
                return $row->updated_at ? with(new Carbon($row->updated_at)) -> format('Y-m-d H:i') : "";
            })
            ->filterColumn('updated_at', function($query, $keyword) use ($thisQuery) {
                $query->whereRaw("DATE_FORMAT(". $thisQuery->first()->getTable().".updated_at, '%Y-%m-%d %H:%i') LIKE ?", ["%$keyword%"]);
            });
    }

}