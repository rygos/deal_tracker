<?php

namespace App\Http\Controllers\Reports;

use App\Models\DtMaster;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DealsPerMonthController extends Controller
{
    public function index($year = 0, $month = 0){
        if($year == 0){
            $year = Carbon::now()->year;
        }
        if($month == 0){
            $month = Carbon::now()->month;
        }

        $date_start = Carbon::parse($year.'-'.$month.'-01');
        $date_end = Carbon::parse($year.'-'.$month.'-31');


        $deals = DtMaster::where('create_date', '>=', $date_start)
            ->where('create_date', '<=',  $date_end)
            ->orderBy('create_date', 'desc')
            ->groupBy('crm_wft')
            ->groupBy('id')
            ->select(\DB::raw('*, MAX(real_creation_date)'))
            ->paginate(20);

        //Füllen des Statusarrays
        $status = \DB::table('dt_status')->get();
        $status_return = array();
        foreach ($status as $s) {
            $status_return[$s->id] = $s->value;
        }

        //Füllen der Gewinnchance
        $cow = \DB::table('dt_chanceofwin')->get();
        $cow_return = array();
        foreach ($cow as $c) {
            $cow_return[$c->id] = $c->value;
        }

        return view('deals.index', [
            'deals'       => $deals,
            'status'      => $status_return,
            'chanceofwin' => $cow_return,
        ]);
    }
}
