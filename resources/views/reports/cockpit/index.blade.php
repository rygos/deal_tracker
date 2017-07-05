@extends('layouts.dashboard')
@section('page_heading','Cockpit')
@section('section')

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-condensed table-bordered table-striped">
                    <thead>
                    <tr>
                        <th></th>
                        @for($i = 11; $i >= 0; $i--)
                            <th>
                                {{ date("M. Y", strtotime( date( 'Y-m-01' )." -$i months")) }}
                            </th>
                        @endfor
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Total number deals</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ $data[$i]['tnd'] }}
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>Deal Values</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['dv'], 0, ',', '.') }} €
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>Volume</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['v'], 0, ',', '.') }}
                            </td>
                        @endfor
                    </tr>
                    <td bgcolor="#FFFFFF" style="line-height:10px;" colspan=13>&nbsp;</td>
                    <tr>
                        <td>Dealtype CC-Pack</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['dtccpack'], 0, ',', '.') }}
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>Dealtype CC-Plus</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['dtccplus'], 0, ',', '.') }}
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>Dealtype Complex</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['dtcomplex'], 0, ',', '.') }}
                            </td>
                        @endfor
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection