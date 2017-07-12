<li class="sidebar-search">
    {{ Form::open(['action' => 'SearchController@search', 'method' => 'get']) }}
    <div class="input-group custom-search-form">
        <input name="term" type="text" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
    </div>
{{ Form::close() }}
<!-- /input-group -->
</li>
<li {{ (Request::is('/') ? 'class="active"' : '') }}>
    <a href="{{ url ('') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
</li>
<li>
    <a href="#"><i class="fa fa-table fa-fw"></i> Deals<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li {{ (Request::is('*deals') ? 'class="active"' : '') }}>
            <a href="{{ url ('deals') }}"> Übersicht</a>
        </li>
        <li {{ (Request::is('*deals/add') ? 'class="active"' : '') }}>
            <a href="{{ url ('deals/add' ) }}"> Hinzufügen</a>
        </li>
    </ul>
    <!-- /.nav-second-level -->
</li>
<li>
    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reports<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li {{ (Request::is('*reports') ? 'class="active"' : '') }}>
            <a href="{{ url ('reports') }}"> Cockpit</a>
        </li>
        <li {{ (Request::is('*reports/deals_per_month') ? 'class="active"' : '') }}>
            <a href="{{ url ('reports/deals_per_month' ) }}"> Deals per month</a>
        </li>
        <li {{ (Request::is('*reports/updated_deals_per_week') ? 'class="active"' : '') }}>
            <a href="{{ url ('reports/updated_deals_per_week' ) }}"> Updated deals per week</a>
        </li>
        <li {{ (Request::is('*reports/financial_classification_deals') ? 'class="active"' : '') }}>
            <a href="{{ url ('reports/financial_classification_deals' ) }}"> Financial Classification deals</a>
        </li>
        <li {{ (Request::is('*reports/deals_not_finalized') ? 'class="active"' : '') }}>
            <a href="{{ url ('reports/deals_not_finalized' ) }}"> Deals not finalized</a>
        </li>
    </ul>
    <!-- /.nav-second-level -->
</li>
<li>
    <a href="#"><i class="fa fa-files-o fa-fw"></i> Import<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li {{ (Request::is('/import') ? 'class="active"' : '') }}>
            <a href="{{ url ('import') }}">Excel Datei importieren</a>
        </li>
    </ul>
    <!-- /.nav-second-level -->
</li>
<li {{ (Request::is('*documentation') ? 'class="active"' : '') }}>
    <a href="{{ url ('documentation') }}"><i class="fa fa-file-word-o fa-fw"></i> Dokumentation</a>
</li>