<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview
            @if(Request::is('task/*'))
                active
            @endif
            ">
                <a href="#">
                    <i class="fa fa-list"></i> <span>Task</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('task', ['index', 'pending']) }}"><i class="fas fa-hourglass-half"></i> &nbsp;&nbsp;<span>Pending</span></a></li>
                    <li><a href="{{ url('task', ['index', 'completed']) }}"><i class="fas fa-check-circle"></i> &nbsp;&nbsp;<span>Completed</span></a></li>
                </ul>
            </li>
            <li class="treeview
            @if(Request::is('device/*'))
            active
            @endif
            ">
                <a href="#">
                    <i class="fas fa-sitemap"></i> &nbsp;&nbsp;<span>IT Assets</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @foreach($config->getValue('device', 'asc') as $device)
                    <li>
                        <a href="{{ url('device', [$device]) }}">
                            <i class="{{ $config->getValue($device.'_icon')->first() }}"></i> &nbsp;&nbsp;<span>{{ ucwords(str_replace_last('-', ' ', $device)) }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li class="treeview
            @if(Request::is('item') || Request::is('item/*'))
                    active
            @endif
                    ">
                <a href="#">
                    <i class="fa fa-cubes"></i> <span>Consumables</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('item') }}"><i class="fas fa-bars"></i> &nbsp;&nbsp;Overview</a></li>
                    @foreach($service->getItems() as $item)
                        <li><a href="{{ url('item', ['view', $item->id]) }}"><i class="{{ $item->icon_class }}"></i> &nbsp;&nbsp;{{ $item->name }}</a></li>
                    @endforeach

                    <!-- <li><a href="{{ url('item', ['consumption']) }}"><i class="fas fa-paste"></i> &nbsp;&nbsp;Consumption</a></li> -->
                </ul>
            </li>
            <li class="treeview
            @if(Request::is('config/*'))
                active
            @endif
            ">
                <a href="#">
                    <i class="fa fa-cog"></i><span>Config</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('config', ['device']) }}"><i class="fas fa-bars"></i>&nbsp;&nbsp; Device</a></li>
                    <li><a href="{{ url('config', ['department']) }}"><i class="fas fa-users"></i>&nbsp;&nbsp; Department</a>
                    </li>
                    @foreach($config->getValue('device', 'asc') as $device)
                    <li>
                        <a href="{{ url('config', [$device]) }}">
                            <i class="{{ $config->getValue($device.'_icon')->first()}}"></i> &nbsp;&nbsp;<span>{{ ucwords(str_replace_last('-', ' ', $device)) }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </section>
</aside>