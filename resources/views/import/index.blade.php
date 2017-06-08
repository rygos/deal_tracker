@extends('layouts.dashboard')
@section('page_heading','Import')
@section('section')

<div class="col-sm-12">
    <div class="row">
        <div class="col-lg-6">
            {!! Form::open(['url' => 'import', 'method' => 'post', 'files' => true]) !!}
                <div class="form-group">

                    {!! Form::label('dealtracker', 'Calctool Excel File') !!}
                    {!! Form::file('dealtracker', null) !!}

                </div>
                <button type="submit" class="btn btn-default">Importiere</button>
                <button type="reset" class="btn btn-default">Reset</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop