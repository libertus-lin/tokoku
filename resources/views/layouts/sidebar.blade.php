<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('lte/dist/img/unnamed.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="active"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-database"></i>
                    <span>Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('kategori.index') }}"><i class="fa fa-circle-o"></i> Kategori</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Produk</a></li>
                    <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Member</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Supplier</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cart-plus"></i>
                    <span>Transaksi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Pengeluaran</a></li>
                    <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Daftar Pembelian</a></li>
                    <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Transaksi Pembelian</a></li>
                    <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Daftar Penjualan</a></li>
                    <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Transaksi Penjualan</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-pdf-o"></i>
                    <span>Report</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Laporan</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cogs"></i> <span>Pengaturan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> User</a></li>
                    <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>
            <li>
                <a href="#" onclick="document.getElementById('logout-form').submit()">
                    <i class="fa fa-sign-out"></i>
                    <span>Sign Out</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

<form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
    @csrf
</form>
