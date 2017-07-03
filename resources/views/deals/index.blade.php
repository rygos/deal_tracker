@extends('layouts.dashboard')
@section('page_heading','Deals Dashboard')
@section('section')

<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-12">
            {{ $deals->links('vendor.pagination.bootstrap-4') }}
            <table class="table table-condensed">
                <thead>
                    <th>DT-ID</th>
                    <th>Datum</th>
                    <th>WFT/CRM</th>
                    <th>Kunde</th>
                    <th>Fertigstellung</th>
                    <th>Status</th>
                    <th>Gewinnchance</th>
                </thead>
                <tbody>
                    @foreach($deals as $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ \Carbon\Carbon::parse($d->create_date)->toDateString() }}</td>
                            <td><a href="{{ action('DealController@show', $d->id) }}">{{ $d->crm_wft }}</a></td>
                            <td>{{ $d->customer }}</td>
                            <td>{{ $d->complete }}%</td>
                            <td>{{ $status[$d->status] }}</td>
                            <td>{{ $chanceofwin[$d->chanceofwin] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $deals->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</div>

@stop
