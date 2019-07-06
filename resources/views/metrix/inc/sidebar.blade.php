<aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="p-t-30">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="charts.html" aria-expanded="false">
                            <i class="mdi mdi-chart-bar"></i>
                            <span class="hide-menu">משתמשים</span>
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            @if(count($new_customer_noreed) > 0)
                                <span class="label label-success pull-right">{{count($new_customer_noreed)}}</span>
                            @else
                            @endif
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('customers') }}" aria-expanded="false">
                            <i class="mdi mdi-chart-bubble"></i>
                            <span class="hide-menu">ניהול לקוחות</span>
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            @if(count($customer_noreed) > 0)
                                <span class="label label-success pull-right">{{count($customer_noreed)}}</span>
                            @else
                            @endif
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html" aria-expanded="false">
                            <i class="mdi mdi-border-inside"></i>
                            <span class="hide-menu">Tables</span>

                        </a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="grid.html" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Full Width</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Forms </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic </span></a></li>
                            <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard </span></a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
