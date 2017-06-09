<?php

namespace App\Http\Controllers;

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
        return view('deals.create');
    }

    public function store(Request $request){

    }

    public function edit($deal_id){
        return view('deals.edit');
    }

    public function update(Request $request, $deal_id){

    }
}
