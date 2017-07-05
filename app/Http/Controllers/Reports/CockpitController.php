<?php

namespace App\Http\Controllers\Reports;

use App\Models\DtMaster;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CockpitController extends Controller
{
    public function index(){
        $master = DtMaster::get();
        $start = Carbon::parse('first day of this month');
        $end = Carbon::parse('last day of this month');

        $data = array();
        for($i = 12; $i >= 1; $i--){
            $t['month_start'] = Carbon::parse('first day of this month')->addMonth(-$i+1)->toDateTimeString();
            $t['month_end'] = Carbon::parse('last day of this month')->addMonth(-$i+1)->toDateTimeString();
            $t['tnd'] = $master
                ->where('create_date', '>=', $t['month_start'])
                ->where('create_date', '<=',  $t['month_end'])
                ->count();
            $t['dv'] = $master
                ->where('create_date', '>=', $t['month_start'])
                ->where('create_date', '<=',  $t['month_end'])
                ->Sum('revenue');
            $t['v'] = $master
                ->where('create_date', '>=', $t['month_start'])
                ->where('create_date', '<=',  $t['month_end'])
                ->Sum('volume');
            $t['dtccpack'] = $master
                ->where('create_date', '>=', $t['month_start'])
                ->where('create_date', '<=',  $t['month_end'])
                ->where('dealtype', '=', 1)
                ->count();
            $t['dtccplus'] = $master
                ->where('create_date', '>=', $t['month_start'])
                ->where('create_date', '<=',  $t['month_end'])
                ->where('dealtype', '=', 2)
                ->count();
            $t['dtcomplex'] = $master
                ->where('create_date', '>=', $t['month_start'])
                ->where('create_date', '<=',  $t['month_end'])
                ->whereNotIn('dealtype', [1,2])
                ->count();
            $t['fc1k'] = $master
                ->where('create_date', '>=', $t['month_start'])
                ->where('create_date', '<=',  $t['month_end'])
                ->where('revenue', '>=', 1000)
                ->where('revenue', '<=', 10000)
                ->count();
            $t['fc11k'] = $master
                ->where('create_date', '>=', $t['month_start'])
                ->where('create_date', '<=',  $t['month_end'])
                ->where('revenue', '>=', 10001)
                ->where('revenue', '<=', 100000)
                ->count();
            $t['fc101k'] = $master
                ->where('create_date', '>=', $t['month_start'])
                ->where('create_date', '<=',  $t['month_end'])
                ->where('revenue', '>=', 100001)
                ->where('revenue', '<=', 1000000)
                ->count();
            $t['fc1m'] = $master
                ->where('create_date', '>=', $t['month_start'])
                ->where('create_date', '<=',  $t['month_end'])
                ->where('revenue', '>=', 1000001)
                ->count();
            $data[$i-1] = $t;
        }

        return view('reports.cockpit.index', [
            'data' => $data,
            'start' => $start,
            'end' => $end,
        ]);
    }
}
