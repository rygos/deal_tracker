@extends('layouts.dashboard')
@section('page_heading','Deal hinzufügen')
@section('section')

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-8">
                {!! Form::open(['action' => ['DealController@store'], 'method' => 'post', 'role' => 'form']) !!}
                <div class="form-group">
                    <label>Erstellungsdatum</label>
                    <input class="form-control" name="create_date" value="{{ date('Y-m-d', time()) }}">
                    <p class="help-block">Automatisches Datum stehen lassen oder im Format YYYY-MM-DD eingeben.</p>
                </div>
                <div class="form-group">
                    <label>CRM/WFT</label>
                    <input name="crmwft" class="form-control" placeholder="WFT/CRM eingeben">
                </div>
                <div class="form-group">
                    <label>Kunde</label>
                    <input name="customer" class="form-control" placeholder="Kundenname eingeben">
                </div>
                <div class="form-group">
                    <label>Kurzbeschreibung</label>
                    <textarea name="short_desc" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Typen</label>
                    <div class="checkbox">
                        <label>
                            <input name="imac" type="checkbox" value="">IMAC
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="onsitecc" type="checkbox" value="">On Site CC
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="swap" type="checkbox" value="">SWAP
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="resold_sub" type="checkbox" value="">Resold/Sub
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="callrouting" type="checkbox" value="">Callrouting
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Produkt</label>
                    <select name="product" class="form-control">
                        @foreach($product as $prod)
                            <option value="{{ $prod->id }}">{{ $prod->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Hersteller</label>
                    <select name="manufacturer" class="form-control">
                        @foreach($manufacturer as $manu)
                            <option value="{{ $manu->id }}">{{ $manu->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Volumen</label>
                    <input name="volume" class="form-control" placeholder="Volumen eingeben">
                </div>
                <div class="form-group">
                    <label>SLA</label>
                    <select name="sla" class="form-control">
                        @foreach($sla as $manu)
                            <option value="{{ $manu->id }}">{{ $manu->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Typ</label>
                    <select name="type" class="form-control">
                        @foreach($type as $manu)
                            <option value="{{ $manu->id }}">{{ $manu->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Go / NoGo</label>
                    <input name="go_nogo" class="form-control" placeholder="Go / NoGo eingeben">
                </div>
                <div class="form-group">
                    <label>Business Contact</label>
                    <input name="business_contact" class="form-control" placeholder="Business Contact eingeben">
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
                    <textarea name="todo_remarks" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Zieldatum</label>
                    <input name="due_date" class="form-control">
                    <p class="help-block">Bitte im Format YYYY-MM-DD eingeben.</p>
                </div>
                <div class="form-group">
                    <label>Erwartete Einnahmen</label>
                    <input name="revenue" class="form-control" placeholder="Erwartete Einnahmen">
                </div>
                <div class="form-group">
                    <label>Gesamtdauer</label>
                    <input name="total_period" class="form-control" placeholder="Gesamtdauer">
                </div>
                <div class="form-group">
                    <label>Deal Typ</label>
                    <select name="deal_type" class="form-control">
                        @foreach($deal_type as $manu)
                            <option value="{{ $manu->id }}">{{ $manu->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Deal Status</label>
                    <select name="status" class="form-control">
                        @foreach($status as $manu)
                            <option value="{{ $manu->id }}">{{ $manu->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Fertigstellung</label>
                    <select name="complete" class="form-control">
                        @for($i = 0; $i <= 100; $i += 10)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <p class="help-block">Werte in %</p>
                </div>
                <div class="form-group">
                    <label>Gewinnchance</label>
                    <select name="chanceofwin" class="form-control">
                        @foreach($chanceofwin as $manu)
                            <option value="{{ $manu->id }}">{{ $manu->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Abschlussdatum</label>
                    <input name="closing_date" class="form-control">
                    <p class="help-block">Bitte im Format YYYY-MM-DD eingeben.</p>
                </div>
                <div class="form-group">
                    <label>Projektstart Datum</label>
                    <input name="est_start_date" class="form-control">
                    <p class="help-block">Bitte im Format YYYY-MM-DD eingeben.</p>
                </div>
                <div class="form-group">
                    <label>Deal Gewinner</label>
                    <inputm name="winner" class="form-control" placeholder="Deal Gewinner">
                </div>
                <div class="form-group">
                    <label>Mitbewerber</label>
                    <input name="competitors" class="form-control" placeholder="Mitbewerber">
                </div>
                <div class="form-group">
                    <label>Win/Loss Outcome</label>
                    <input name="winloss_outcome" class="form-control" placeholder="Win/Loss Outcome">
                </div>
                <div class="form-group">
                    <label>Interne Kosten</label>
                    <input name="cost_intern" class="form-control" placeholder="Interne Kosten">
                </div>
                <div class="form-group">
                    <label>Externe Kosten</label>
                    <input name="cost_extern" class="form-control" placeholder="Externe Kosten">
                </div>
                <div class="form-group">
                    <label>Software Kosten</label>
                    <input name="cost_software" class="form-control" placeholder="Software Kosten">
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
