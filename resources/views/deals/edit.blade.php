@extends('layouts.dashboard')
@section('page_heading','Deal bearbeiten')
@section('section')

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-8">
                {!! Form::open(['action' => ['DealController@update', $deal->id], 'method' => 'post', 'role' => 'form']) !!}
                {!! Form::hidden('deal_id', $deal->id) !!}
                <div class="form-group">
                    <label>DealID</label>
                    <input class="form-control" value="{{ $deal->id }}">
                </div>
                <div class="form-group">
                    <label>Erstellungsdatum</label>
                    <input class="form-control" name="create_date" value="{{ $deal->create_date }}">
                    <p class="help-block">Automatisches Datum stehen lassen oder im Format YYYY-MM-DD eingeben.</p>
                </div>
                <div class="form-group">
                    <label>CRM/WFT</label>
                    <input name="crmwft" class="form-control" placeholder="WFT/CRM eingeben" value="{{ $deal->crm_wft }}">
                </div>
                <div class="form-group">
                    <label>Kunde</label>
                    <input name="customer" class="form-control" placeholder="Kundenname eingeben" value="{{ $deal->customer }}">
                </div>
                <div class="form-group">
                    <label>Kurzbeschreibung</label>
                    <textarea name="short_desc" class="form-control" rows="3">{{ $deal->short_desc }}</textarea>
                </div>
                <div class="form-group">
                    <label>Typen</label>
                    <div class="checkbox">
                        <label>
                            <input name="imac" type="checkbox" value="" @if($deal->imac == 1) checked @endif>IMAC
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="onsitecc" type="checkbox" value="" @if($deal->onsitecc == 1) checked @endif>On Site CC
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="swap" type="checkbox" value="" @if($deal->swap == 1) checked @endif>SWAP
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="resold_sub" type="checkbox" value="" @if($deal->resold_sub == 1) checked @endif>Resold/Sub
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="callrouting" type="checkbox" value="" @if($deal->callrouting == 1) checked @endif>Callrouting
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Produkt</label>
                    <select name="product" class="form-control">
                        @foreach($product as $prod)
                            <option value="{{ $prod->id }}" @if($deal->product == $prod->id) selected @endif>{{ $prod->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Hersteller</label>
                    <select name="manufacturer" class="form-control">
                        @foreach($manufacturer as $manu)
                            <option value="{{ $manu->id }}" @if($deal->manufaturer == $manu->id) selected @endif>{{ $manu->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Volumen</label>
                    <input name="volume" class="form-control" placeholder="Volumen eingeben" value="{{ $deal->volume }}">
                </div>
                <div class="form-group">
                    <label>SLA</label>
                    <select name="sla" class="form-control">
                        @foreach($sla as $manu)
                            <option value="{{ $manu->id }}" @if($deal->sla == $manu->id) selected @endif>{{ $manu->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Typ</label>
                    <select name="type" class="form-control">
                        @foreach($type as $manu)
                            <option value="{{ $manu->id }}" @if($deal->type == $manu->id) selected @endif>{{ $manu->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Go / NoGo</label>
                    <input name="go_nogo" class="form-control" placeholder="Go / NoGo eingeben" value="{{ $deal->go_nogo }}">
                </div>
                <div class="form-group">
                    <label>Business Contact</label>
                    <input name="business_contact" class="form-control" placeholder="Business Contact eingeben" value="{{ $deal->business_contract }}">
                </div>
                <div class="form-group">
                    <label>CostDeskOwner</label>
                    <select name="costdeskowner" class="form-control">
                        @foreach($costdeskowner as $manu)
                            <option @if($manu->short_name == \App\Helpers\AuthHelper::user()->short_name) selected @endif value="{{ $manu->id }}">{{ $manu->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>ToDo / Bemerkungen</label>
                    <textarea name="todo_remarks" class="form-control" rows="3">{{ $deal->todo_remarks }}</textarea>
                </div>
                <div class="form-group">
                    <label>Zieldatum</label>
                    <input name="due_date" class="form-control" value="{{ $deal->due_date }}">
                    <p class="help-block">Bitte im Format YYYY-MM-DD eingeben.</p>
                </div>
                <div class="form-group">
                    <label>Erwartete Einnahmen</label>
                    <input name="revenue" class="form-control" placeholder="Erwartete Einnahmen" value="{{ $deal->revenue }}">
                </div>
                <div class="form-group">
                    <label>Gesamtdauer</label>
                    <input name="total_period" class="form-control" placeholder="Gesamtdauer" value="{{ $deal->total_period }}">
                </div>
                <div class="form-group">
                    <label>Deal Typ</label>
                    <select name="deal_type" class="form-control">
                        @foreach($deal_type as $manu)
                            <option value="{{ $manu->id }}" @if($deal->deal_type == $manu->id) selected @endif>{{ $manu->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Deal Status</label>
                    <select name="status" class="form-control">
                        @foreach($status as $manu)
                            <option value="{{ $manu->id }}" @if($deal->status == $manu->id) selected @endif>{{ $manu->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Fertigstellung</label>
                    <select name="complete" class="form-control">
                        @for($i = 0; $i <= 100; $i += 10)
                            <option value="{{ $i }}" @if($deal->complete == $i) selected @endif>{{ $i }}</option>
                        @endfor
                    </select>
                    <p class="help-block">Werte in %</p>
                </div>
                <div class="form-group">
                    <label>Gewinnchance</label>
                    <select name="chanceofwin" class="form-control">
                        @foreach($chanceofwin as $manu)
                            <option value="{{ $manu->id }}" @if($deal->chanceofwin == $manu->id) selected @endif>{{ $manu->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Abschlussdatum</label>
                    <input name="closing_date" class="form-control" value="{{ $deal->closing_date }}">
                    <p class="help-block">Bitte im Format YYYY-MM-DD eingeben.</p>
                </div>
                <div class="form-group">
                    <label>Projektstart Datum</label>
                    <input name="est_start_date" class="form-control" value="{{ $deal->est_start_date }}">
                    <p class="help-block">Bitte im Format YYYY-MM-DD eingeben.</p>
                </div>
                <div class="form-group">
                    <label>Deal Gewinner</label>
                    <input name="winner" class="form-control" placeholder="Deal Gewinner" value="{{ $deal->winner }}">
                </div>
                <div class="form-group">
                    <label>Mitbewerber</label>
                    <input name="competitors" class="form-control" placeholder="Mitbewerber" value="{{ $deal->competitors }}">
                </div>
                <div class="form-group">
                    <label>Win/Loss Outcome</label>
                    <input name="winloss_outcome" class="form-control" placeholder="Win/Loss Outcome" value="{{ $deal->winloss_outcome }}">
                </div>
                <div class="form-group">
                    <label>Interne Kosten</label>
                    <input name="cost_intern" class="form-control" placeholder="Interne Kosten" value="{{ $deal->cost_intern }}">
                </div>
                <div class="form-group">
                    <label>Externe Kosten</label>
                    <input name="cost_extern" class="form-control" placeholder="Externe Kosten" value="{{ $deal->cost_extern }}">
                </div>
                <div class="form-group">
                    <label>Software Kosten</label>
                    <input name="cost_software" class="form-control" placeholder="Software Kosten" value="{{ $deal->cost_software }}">
                </div>

                <button type="submit" class="btn btn-default">Speichern</button>
                <button type="reset" class="btn btn-default">Löschen</button>
                {!! Form::close() !!}
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Wichtige Hinweise
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>
                                Megawichtige Info.
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer">
                        Weitere Informationen in der Dokumentation
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
