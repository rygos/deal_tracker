<?php

namespace App\Http\Controllers;

use Doctrine\DBAL\Driver\IBMDB2\DB2Connection;
use Illuminate\Http\Request;

class DealController extends Controller
{
    public function index(){
        return view('deals.index');
    }

    public function show($deal_id){
        return view('deals.show');
    }

    public function create(){
        $product = \DB::table('dt_product')->orderBy('value')->get();
        $manufacturer = \DB::table('dt_manufacturer')->orderBy('value')->get();
        $sla = \DB::table('dt_sla')->orderBy('id')->get();
        $type = \DB::table('dt_type')->orderBy('value')->get();
        $costdeskowner = \DB::table('dt_costdeskowner')->orderBy('value')->get();
        $deal_type = \DB::table('dt_dealtype')->get();
        $status = \DB::table('dt_status')->get();
        $chanceofwin = \DB::table('dt_chanceofwin')->get();

        return view('deals.create',[
            'product' => $product,
            'manufacturer' => $manufacturer,
            'sla' => $sla,
            'type' => $type,
            'costdeskowner' => $costdeskowner,
            'deal_type' => $deal_type,
            'status' => $status,
            'chanceofwin' => $chanceofwin,
        ]);
    }

    public function store(Request $request){
        \DB::table('dt_master')->insert([
             'create_date' => $request->get('create_date'),
            'crmwft'=>$request->get('crmwft'),
            'customer' => $request->get('create_date'),
            'short_desc' => $request->get('short_desc'),
            'onsitecc' => $request->get('onsitecc'),
            'product' => $request->get('product'),
            'manufaturer' => $request->get('manufacturer'),
            'volume' => $request->get('volume'),
            'sla' => $request->get('sla'),
            'type' => $request->get('type'),
            'go_nogo'=> $request->get('go_nogo'),
            'business_contact'=> $request->get('business_contact'),
            'costdeskowner' => $request->get('costdeskowner'),
            'todo_remarks' => $request->get('todo_remarks'),
            'due_date' => $request->get('due_date'),
            'revenue' => $request->get('revenue'),
            'total_period' => $request->get('total_period'),
            'deal_type' => $request->get('deal_type'),
            'status' => $request->get('status'),
            'complete' => $request->get('complete'),
            'chanceofwin' => $request->get('chanceofwin'),
            'closing_date' => $request->get('closing_date'),
            'est_start_date' => $request->get('est_start_date'),
            'competitors' => $request->get('competitors'),
            'winloss_outcome' => $request->get('winloss_outcome'),
            'cost_intern' =>             $request->get('cost_intern'),
            'cost_extern'=>$request->get('cost_extern'),
            'cost_software'=> $request->get('cost_software'),
        ]);

        return redirect()->action('DealController@index');
    }

    public function edit($deal_id){
        return view('deals.edit');
    }

    public function update(Request $request, $deal_id){

    }
}
