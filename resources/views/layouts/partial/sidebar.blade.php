<!-- Left Sidebar  -->
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label"> Home</li>
                <li> <a class="has-arrow  " href="/" aria-expanded="false"><i class="fa fa-heartbeat"></i><span class="hide-menu"> Dashboard </span></a>

                </li>
                <li class="nav-label">Apps</li>
                <li> <a href="{{url('/staffs')}}" aria-expanded="false"><i class="fa fa-users"></i><span> Staff</span></a></li>
                <li> <a href="{{url('/credits/create')}}" aria-expanded="false"><i class="fa fa-hand-holding-usd"></i><span> Add Credit</span></a></li>
                <li> <a href="{{url('/credits')}}" aria-expanded="false"><i class="fa fa-file-invoice-dollar"></i><span> Credit Voucher</span></a></li>
                <li> <a href="{{url('/debits/create')}}" aria-expanded="false"><i class="fa fa-money-bill-alt"></i><span> Add Debit</span></a></li>
                <li> <a href="{{url('/debits')}}" aria-expanded="false"><i class="fa fa-chart-bar"></i><span> Debit Voucher</span></a></li>
                <li> <a href="{{url('/salary')}}" aria-expanded="false"><i class="fa fa-file-invoice"></i><span> Salary Sheet</span></a></li>
                <li> <a href="{{url('/reports')}}" aria-expanded="false"><i class="fa fa-chart-line"></i><span> Reports</span></a></li>



                <li class="nav-label">Upcoming</li>
                <li> <a href="{{url('')}}" aria-expanded="false"><i class="fa fa-clipboard-list"></i><span> Attendance</span></a></li>
                <li> <a href="{{url('')}}" aria-expanded="false"><i class="fa fa-clipboard-list"></i><span> Client Payment</span></a></li>
                <li> <a href="{{url('')}}" aria-expanded="false"><i class="fa fa-clipboard-list"></i><span> Invoice</span></a></li>
                <li> <a href="{{url('')}}" aria-expanded="false"><i class="fa fa-clipboard-list"></i><span> Gross/Loss</span></a></li>


                <li class="nav-label">EXTRA</li>


                @hasrole('Admin')
                <li> <a href="{{url('/purposes')}}" aria-expanded="false"><i class="fa fa-database"></i><span> Purposes</span></a></li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Users</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('users')}}">Users</a></li>
                        <li><a href="{{url('roles')}}">Roles</a></li>
                        <li><a href="{{url('permissions')}}">Permissions</a></li>

                    </ul>
                </li>
                @endhasrole
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Documents</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">How to use</a></li>

                        <li> <a class="has-arrow" href="#" aria-expanded="false">Videos</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.3.1</a></li>
                                <li><a href="#">item 1.3.2</a></li>
                                <li><a href="#">item 1.3.3</a></li>
                                <li><a href="#">item 1.3.4</a></li>
                            </ul>
                        </li>
                        <li><a href="#">item 1.4</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>
<!-- End Left Sidebar  -->