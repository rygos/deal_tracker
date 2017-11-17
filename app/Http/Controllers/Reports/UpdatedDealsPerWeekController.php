<?php

namespace App\Http\Controllers\Reports;

use App\Models\DtMaster;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdatedDealsPerWeekController extends Controller
{
    public function index(){
        $date_start = Carbon::parse('this week');
        $date_end = Carbon::parse('this week +6 days');


        $deals = DB::table('dt_master')->where('update_date', '>=', $date_start)
            ->where('update_date', '<=',  $date_end)
            ->orderBy('update_date', 'desc')
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
