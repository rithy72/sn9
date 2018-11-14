<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/images/admin.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="">
                <a href="{{url('/admin/account')}}">
                    <i class="fa fa-user-circle-o"></i> <span>Account Setting</span>

                </a>
            </li>
            <li class="">
                <a href="{{url('/admin/list-product')}}">
                    <i class="fa fa-list-ul"></i>
                    <span>List Products</span>
                </a>

            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-archive"></i>
                    <span>Inventory</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{asset('/admin/category')}}"><i class="fa fa-circle-o"></i> Category</a></li>
                    <li><a href="{{asset('/admin/brand')}}"><i class="fa fa-circle-o"></i> Brand</a></li>
                    <li><a href="{{asset('/admin/type')}}"><i class="fa fa-circle-o"></i> Type</a></li>
                    <li><a href="{{asset('/admin/product')}}"><i class="fa fa-circle-o"></i> Create Product</a></li>
                    <li><a href="{{asset('/admin/importstock')}}"><i class="fa fa-circle-o"></i> Import Stock</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i>
                    <span>Reports</span>
                </a>
            </li>
            <li class="">
                <a href="{{url('/admin/user')}}">
                    <i class="fa fa-users"></i>
                    <span>Manage Users</span>
                </a>
            </li>
            <li class="">
                <a href="{{url('/admin/order-history')}}">
                    <i class="fa fa-bookmark"></i>
                    <span>Order history</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>