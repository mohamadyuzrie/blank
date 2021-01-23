@if(!isset($noWhiteHeader))
    <div class="bg-white pt-0 pb-0 mb-3">
        <div class="row" style="width:99.9%">
            <div class="col-1 pr-0">
                @if(!isset($noBackButton))
                <ol class="breadcrumb bg-white pr-0 m-0">
                    <li class="breadcrumb-item pr-0 m-0">
                        <a href="#" onclick="history.go(-1)"><i class="fa fa-angle-left pr-1" aria-hidden="true"></i>
                            <span class="d-none d-xl-inline">Back</span>
                        </a>
                    </li>
                </ol>
                @endif
            </div>
            <div class="col-7">
                <div class="d-none d-sm-block">
                    @yield('breadcrumbs')
                </div>
            </div>
            <div class="col-4">
                @yield('white-panel-extra')
            </div>
        </div>
    </div>
@endif
