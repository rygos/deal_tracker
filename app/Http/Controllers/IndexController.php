<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        // Status Widgets for Dashboard
        $dealcount = DB::table('dt_master')
            ->selectRaw('COUNT(id) as counter')
            ->first();

        $opendeals = DB::table('dt_master')
            ->leftJoin('dt_status', 'dt_master.status', '=', 'dt_status.id')
            ->selectRaw('COUNT(dt_master.id) as counter')
            ->where('dt_status.value', '=', 'Offer')
            ->first();

        $charts['index_dpm'] = DB::table('dt_master')
            ->selectRaw('YEAR(dt_master.create_date) as year')
            ->selectRaw('MONTH(dt_master.create_date) as month')
            ->selectRaw('COUNT(id) AS count')
            ->orderBy('dt_master.create_date')
            ->groupBy('dt_master.create_date')
            ->groupBy(\DB::raw('YEAR(dt_master.create_date)'))
            ->groupBy(\DB::raw('MONTH(dt_master.create_date)'))
            ->get();

        return view('home', [
            'dealcount' => $dealcount,
            'opendeals' => $opendeals,
            'charts' => $charts,
        ]);

    }
}
