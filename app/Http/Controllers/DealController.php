<?php

namespace App\Http\Controllers;

use App\Helpers\AuthHelper;
use App\Models\DtMaster;
use Illuminate\Http\Request;

class DealController extends Controller
{
    public function index()
    {
        //laden der deals
        //$deals = \DB::table('dt_master')->where('costdeskowner', '=', AuthHelper::user()->id)->orderBy('create_date', 'desc')->paginate(20);
        //$deals = \DB::table('dt_master')->orderBy('create_date', 'desc')->paginate(20);
        $deals = DtMaster::orderBy('real_creation_date', 'desc')->paginate(20);

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

    public function show($deal_id)
    {

        // Todo: Auflistung der Verbundenen Alten Deals hinzufügen

        $deal = \DB::table('dt_master')->where('id', '=', $deal_id)->first();

        return view('deals.show', [
            'deal' => $deal,
        ]);
    }

    public function create()
    {
        $product = \DB::table('dt_product')->orderBy('value')->get();
        $manufacturer = \DB::table('dt_manufacturer')->orderBy('value')->get();
        $sla = \DB::table('dt_sla')->orderBy('id')->get();
        $type = \DB::table('dt_type')->orderBy('value')->get();
        $costdeskowner = \DB::table('dt_costdeskowner')->orderBy('value')->get();
        $deal_type = \DB::table('dt_dealtype')->get();
        $status = \DB::table('dt_status')->get();
        $chanceofwin = \DB::table('dt_chanceofwin')->get();

        return view('deals.create', [
            'product'       => $product,
            'manufacturer'  => $manufacturer,
            'sla'           => $sla,
            'type'          => $type,
            'costdeskowner' => $costdeskowner,
            'deal_type'     => $deal_type,
            'status'        => $status,
            'chanceofwin'   => $chanceofwin,
        ]);
    }

    public function store(Request $request)
    {
        $insert = \DB::table('dt_master')->insert([
            'create_date'      => $request->get('create_date'),
            'crm_wft'          => $request->get('crmwft'),
            'customer'         => $request->get('customer'),
            'short_desc'       => $request->get('short_desc'),
            'onsitecc'         => $request->get('onsitecc'),
            'imac'             => $request->get('imac'),
            'resold_sub'       => $request->get('resold_sub'),
            'callrouting'      => $request->get('callrouting'),
            'swap'             => $request->get('swap'),
            'product'          => $request->get('product'),
            'manufaturer'      => $request->get('manufacturer'),
            'volume'           => $request->get('volume'),
            'sla'              => $request->get('sla'),
            'type'             => $request->get('type'),
            'go_nogo'          => $request->get('go_nogo'),
            'business_contact' => $request->get('business_contact'),
            'costdeskowner'    => $request->get('costdeskowner'),
            'todo_remarks'     => $request->get('todo_remarks'),
            'due_date'         => $request->get('due_date'),
            'revenue'          => $request->get('revenue'),
            'total_peroid'     => $request->get('total_period'),
            'deal_type'        => $request->get('deal_type'),
            'status'           => $request->get('status'),
            'complete'         => $request->get('complete'),
            'chanceofwin'      => $request->get('chanceofwin'),
            'closing_date'     => $request->get('closing_date'),
            'est_start_date'   => $request->get('est_start_date'),
            'competitors'      => $request->get('competitors'),
            'winloss_outcome'  => $request->get('winloss_outcome'),
            'cost_intern'      => $request->get('cost_intern'),
            'cost_extern'      => $request->get('cost_extern'),
            'cost_software'    => $request->get('cost_software'),
            'variants'         => 1,
        ]);

        return redirect()->action('DealController@index');
    }

    public function edit($deal_id)
    {
        $deal = \DB::table('dt_master')->where('id', '=', $deal_id)->first();
        $product = \DB::table('dt_product')->orderBy('value')->get();
        $manufacturer = \DB::table('dt_manufacturer')->orderBy('value')->get();
        $sla = \DB::table('dt_sla')->orderBy('id')->get();
        $type = \DB::table('dt_type')->orderBy('value')->get();
        $costdeskowner = \DB::table('dt_costdeskowner')->orderBy('value')->get();
        $deal_type = \DB::table('dt_dealtype')->get();
        $status = \DB::table('dt_status')->get();
        $chanceofwin = \DB::table('dt_chanceofwin')->get();

        return view('deals.edit', [
            'deal' => $deal,
            'product'       => $product,
            'manufacturer'  => $manufacturer,
            'sla'           => $sla,
            'type'          => $type,
            'costdeskowner' => $costdeskowner,
            'deal_type'     => $deal_type,
            'status'        => $status,
            'chanceofwin'   => $chanceofwin,
        ]);
    }

    public function update(Request $request, $deal_id)
    {
        $deal = DtMaster::where('id', '=', $deal_id)->first();

        $deal->create_date = $request->get('create_date');
        $deal->crm_wft = $request->get('crmwft');
        $deal->customer = $request->get('customer');
        $deal->short_desc = $request->get('short_desc');
        $deal->onsitecc = $request->get('onsitecc');
        $deal->imac = $request->get('imac');
        $deal->resold_sub = $request->get('resold_sub');
        $deal->callrouting = $request->get('callrouting');
        $deal->swap = $request->get('swap');
        $deal->product = $request->get('product');
        $deal->manufaturer = $request->get('manufacturer');
        $deal->volume = $request->get('volume');
        $deal->sla = $request->get('sla');
        $deal->type = $request->get('type');
        $deal->go_nogo = $request->get('go_nogo');
        $deal->business_contact = $request->get('business_contact');
        $deal->costdeskowner = $request->get('costdeskowner');
        $deal->todo_remarks = $request->get('todo_remarks');
        $deal->due_date = $request->get('due_date');
        $deal->revenue = $request->get('revenue');
        $deal->total_peroid = $request->get('total_peroid');
        $deal->deal_type = $request->get('deal_type');
        $deal->status = $request->get('status');
        $deal->complete = $request->get('complete');
        $deal->chanceofwin = $request->get('chanceofwin');
        $deal->closing_date = $request->get('closing_date');
        $deal->est_start_date = $request->get('est_start_date');
        $deal->competitors = $request->get('competitors');
        $deal->winloss_outcome = $request->get('winloss_outcome');
        $deal->cost_intern = $request->get('cost_intern');
        $deal->cost_extern = $request->get('cost_extern');
        $deal->cost_software = $request->get('cost_software');
        $deal->variants = $deal->variants + 1;

        $deal->save();

        return redirect()->action('DealController@show', $deal->id);
    }
}
