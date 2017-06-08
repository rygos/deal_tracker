<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $dealcount = DB::table('dt_master')
            ->selectRaw('COUNT(id) as counter')
            ->first();

        $opendeals = DB::table('dt_master')
            ->leftJoin('dt_status', 'dt_master.status', '=', 'dt_status.id')
            ->selectRaw('COUNT(dt_master.id) as counter')
            ->where('dt_status.value', '=', 'Offer')
            ->first();

        return view('home', [
            'dealcount' => $dealcount,
            'opendeals' => $opendeals,
        ]);

    }
}
