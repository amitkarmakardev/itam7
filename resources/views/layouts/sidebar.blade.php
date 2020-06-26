<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview
            @if(Request::is('task/*'))
                active
            @endif
            " >
                <a href="#">
                    <i class="fa fa-list"></i> <span>Task</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('task', ['index', 'pending']) }}"><i class="fa fa-circle-o"></i> Pending</a></li>
                    <li><a href="{{ url('task', ['index', 'completed']) }}"><i class="fa fa-circle-o"></i> Completed</a></li>
                </ul>
            </li>
            <li class="treeview
            @if(Request::is('device/*'))
            active
            @endif
            ">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>IT Assets</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @foreach($config->getValue('device', 'asc') as $device)
                        <li>
                            <a href="{{ url('device', [$device]) }}">
                                <i class="fa fa-circle-o"></i> <span>{{ ucwords(str_replace_last('-', ' ', $device)) }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="treeview
            @if(Request::is('item/*'))
                    active
            @endif
                    " >
                <a href="#">
                    <i class="fa fa-cubes"></i> <span>Consumables</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('item') }}"><i class="fa fa-circle-o"></i> Items</a></li>
                    <li><a href="{{ url('item', ['consumption']) }}"><i class="fa fa-circle-o"></i> Consumption</a></li>
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
                    <li><a href="{{ url('config', ['device']) }}"><i class="fa fa-circle-o"></i> Device</a></li>
                    <li><a href="{{ url('config', ['department']) }}"><i class="fa fa-circle-o"></i> Department</a>
                    </li>
                     @foreach($config->getValue('device', 'asc') as $device)
                        <li>
                            <a href="{{ url('config', [$device]) }}">
                                <i class="fa fa-circle-o"></i> <span>{{ ucwords(str_replace_last('-', ' ', $device)) }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </section>
</aside>