<div class="row">
    <div class="col-md-{{ $col_one or '3'}}">
        <div class="box box-info">
            <div class="box-header"><h3 class="box-title">Config</h3></div>
            <div class="box-body">@menu('backend_config_menu')</div>
        </div>
    </div>
    <div class="col-md-{{ $col_two or '9'}}">
        @yield('admin-config')
    </div>
</div>
