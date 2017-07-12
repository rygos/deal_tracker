@extends('layouts.dashboard')
@section('page_heading','Deal Details: '.$deal->crm_wft)
@section('section')

<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Basis Infornmationen
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>DT-ID</strong>
                        <span class="pull-right">{{ $deal->id }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>WFT / CRM ID</strong>
                        <span class="pull-right">{{ $deal->crm_wft }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Kunde</strong>
                        <span class="pull-right">{{ $deal->customer }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Deal Beschreibung</strong><br>
                        {!! $deal->short_desc !!}
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Deal Settings
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>IMAC</strong>
                        <span class="badge">{{ (($deal->imac == 0))? '':'TRUE' }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>OnSite CC</strong>
                        <span class="badge">{{ (($deal->onsitecc == 0))?'':'TRUE' }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>SWAP</strong>
                        <span class="badge">{{ (($deal->swap == 0))?'':'TRUE' }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Resold / Sub</strong>
                        <span class="badge">{{ (($deal->resold_sub == 0))?'':'TRUE' }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Callrouting</strong>
                        <span class="badge">{{ (($deal->callrouting == 0))?'':'TRUE' }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Produktinformationen
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Produkt</strong>
                        <span class="pull-right">{{ DB::table('dt_product')->where('id', '=', $deal->product)->first()->value }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Hersteller</strong>
                        <span class="pull-right">{{ DB::table('dt_manufacturer')->where('id', '=', $deal->manufaturer)->first()->value }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Volumen</strong>
                        <span class="pull-right">{{ $deal->volume }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>SLA</strong>
                        <span class="pull-right">{{ DB::table('dt_sla')->where('id', '=', $deal->sla)->first()->value }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Typ</strong>
                        <span class="pull-right">{{ DB::table('dt_type')->where('id', '=', $deal->type)->first()->value }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Go / NoGo</strong>
                        <span class="pull-right">{{ $deal->go_nogo }}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Details
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Business Contact</strong>
                        <span class="pull-right">{{ $deal->business_contact }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>CostDesk Owner</strong>
                        <span class="pull-right">{{ DB::table('dt_costdeskowner')->where('id', '=', $deal->costdeskowner)->first()->value }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Ziel Datum</strong>
                        <span class="pull-right">{{ \Carbon\Carbon::parse($deal->due_date)->formatLocalized('%d %B %Y') }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Vorraussichtliches Einkommen</strong>
                        <span class="pull-right">{{ number_format($deal->revenue,2,',', '.') }} €</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Gesamtdauer in Monaten</strong>
                        <span class="pull-right">{{ $deal->total_peroid }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Deal Typ</strong>
                        <span class="pull-right">{{ DB::table('dt_dealtype')->where('id', '=', $deal->deal_type)->first()->value }}</span>
                    </li>
                    <li class="list-group-item {{ DB::table('dt_status')->where('id', '=', $deal->status)->first()->bs_color }}">
                        <strong>Status</strong>
                        <span class="pull-right">{{ DB::table('dt_status')->where('id', '=', $deal->status)->first()->value }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Business Contact</strong>
                        <span class="pull-right">{{ $deal->business_contact }}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>CostDesk Owner</strong>
                        <span class="pull-right">{{ DB::table('dt_costdeskowner')->where('id', '=', $deal->costdeskowner)->first()->value }}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Notizen / Bemerkungen
                </div>
                <div class="panel-body">
                    {!! $deal->todo_remarks !!}
                </div>
            </div>
        </div>
    </div>
</div>

@stop
