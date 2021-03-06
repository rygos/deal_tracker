@extends('layouts.plane')

@section('body')

    @php
        $usercheck = \App\Helpers\AuthHelper::user();
    @endphp

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('') }}">Deal Tracker | {{ config('app.page.version') }}</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                @if($usercheck != null)
                    @include('layouts._partials.navigation_top')
                @endif
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        @if($usercheck != null)
                            @include('layouts._partials.navigation_left')
                        @endif
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <div class="pull-left">
                            <h1>@yield('page_heading')</h1>
                        </div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="#" onclick="history.back()" class="btn btn-default btn-sm">Back</a>
                                @if(isset($deal))
                                    <a href="{{ action('DealController@edit', $deal->id) }}" class="btn btn-default btn-sm">edit</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                @yield('section')
            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop

