<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel -->
        <!--
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/template/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        -->

        <!-- search form -->
        <!--
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        -->
        <!-- /.search form -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="<?php echo site_url('dashboard') ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class=""></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user">
                    </i> <span>Data PNS</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('datapegawai') ?>"><i class="fa fa-circle-o"></i> Pegawai</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user">
                    </i> <span>Data Pegawai Non PNS</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('datapegawainon') ?>"><i class="fa fa-circle-o"></i> Pegawai Non-PNS</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user">
                    </i> <span>Absensi</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <!-- <li><a href="<?php echo site_url('akun/absensi') ?>"><i class="fa fa-circle-o"></i> PNS</a></li> -->
                    <li><a href="<?php echo site_url('akun/absensi_non') ?>"><i class="fa fa-circle-o"></i> Non-PNS</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user">
                    </i> <span>Gaji</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('datapegawai/datagajipegawai') ?>"><i class="fa fa-circle-o"></i> PNS</a></li>
                    <li><a href="<?php echo site_url('datapegawainon/datagajipegawainon') ?>"><i class="fa fa-circle-o"></i> Non-PNS</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text">
                    </i> <span>Laporan Gaji</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <!-- <li class="treeview">
                    <a href="#"><i class="fa fa-gear"></i> PNS
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="<?php echo site_url('akun/laporanBulanan') ?>"><i class="fa fa-circle-o"></i> Bulanan</a></li>
                      <li><a href="<?php echo site_url('akun/laporanTahunan') ?>"><i class="fa fa-circle-o"></i> Tahunan</a></li>
                    </ul>
                  </li> -->
                  <li class="treeview">
                    <a href="#"><i class="fa fa-gear"></i> NON-PNS
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="<?php echo site_url('akun/laporanBulananNon') ?>"><i class="fa fa-circle-o"></i> Bulanan</a></li>
                      <li><a href="<?php echo site_url('akun/laporanTahunanNon') ?>"><i class="fa fa-circle-o"></i> Tahunan</a></li>
                    </ul>
                  </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gear">
                    </i> <span>Pengaturan</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('akun') ?>"><i class="fa fa-circle-o"></i> Akun</a></li>
                    <li class="treeview">
                      <a href="#"><i class="fa fa-gear"></i> PNS
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="<?php echo site_url('pangkat') ?>"><i class="fa fa-circle-o"></i> Pangkat</a></li>
                        <li><a href="<?php echo site_url('jabatan') ?>"><i class="fa fa-circle-o"></i> Jabatan</a></li>
                        <li><a href="<?php echo site_url('tunjangan') ?>"><i class="fa fa-circle-o"></i> Tunjangan</a></li>
                      </ul>
                    </li>
                    <li class="treeview">
                      <a href="#"><i class="fa fa-gear"></i> Non-PNS
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="<?php echo site_url('jabatannon') ?>"><i class="fa fa-circle-o"></i> Jabatan</a></li>
                        <li><a href="<?php echo site_url('tunjangannon') ?>"><i class="fa fa-circle-o"></i> Tunjangan</a></li>
                      </ul>
                    </li>
                </ul>
            </li>
            </li>
            <!--
            <li><a href="#"><i class="fa fa-book"></i> Documentation</a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li>
            -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
