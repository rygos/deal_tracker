<?php

namespace App\Http\Controllers;

use App\Models\DtMaster;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request, $term = ''){
        $deals = DtMaster::where('crm_wft', 'like','%'.$request->get('term').'%')
            ->orderBy('create_date', 'desc')
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
