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
                                {{ number_format($data[$i]['dv'], 0, ',', '.') }}€
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
                    <tr><td bgcolor="#FFFFFF" style="line-height:10px;" colspan=13>&nbsp;</td></tr>
                    <tr><td bgcolor="#FFFFFF" style="line-height:10px;" colspan=13>Deal Type</td></tr>
                    <tr>
                        <td>CC-Pack</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['dtccpack'], 0, ',', '.') }}
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>CC-Plus</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['dtccplus'], 0, ',', '.') }}
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>Complex</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['dtcomplex'], 0, ',', '.') }}
                            </td>
                        @endfor
                    </tr>
                    <tr><td bgcolor="#FFFFFF" style="line-height:10px;" colspan=13>&nbsp;</td></tr>
                    <tr><td bgcolor="#FFFFFF" style="line-height:10px;" colspan=13>Financial classification</td></tr>
                    <tr>
                        <td>0 - 10k</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['fc1k'], 0, ',', '.') }}
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>11k - 100k</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['fc11k'], 0, ',', '.') }}
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>101k - 1M</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['fc101k'], 0, ',', '.') }}
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>> 1M</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['fc1m'], 0, ',', '.') }}
                            </td>
                        @endfor
                    </tr>
                    <tr><td bgcolor="#FFFFFF" style="line-height:10px;" colspan=13>&nbsp;</td></tr>
                    <tr><td bgcolor="#FFFFFF" style="line-height:10px;" colspan=13>Cancelled</td></tr>
                    <tr>
                        <td>Total</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['canceltotal'], 0, ',', '.') }}
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>Ratio</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{@number_format(($data[$i]['cancelratio'] * 100) / $data[$i]['tnd'], 2, ',', '.') }}%
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>Deal Value</td>
                        @for($i = 11; $i >= 0; $i--)
                            <td>
                                {{ number_format($data[$i]['cancelvalue'], 0, ',', '.') }}€
                            </td>
                        @endfor
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection