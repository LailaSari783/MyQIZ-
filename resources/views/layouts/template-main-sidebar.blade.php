 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ asset('template') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light"> {{ config('app.name') }}</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('template') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">{{ Auth::user()->name }}</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 @role('admin')
                     <li class="nav-item">
                         <a href="{{ route('admin.home') }}" class="nav-link">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Dashboard
                             </p>
                         </a>
                     </li>

                     <li class="nav-item">
                         <a href="{{ route('admin.home') }}" class="nav-link">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Tambah Pengguna
                             </p>
                         </a>
                     </li>

                     <li class="nav-item">
                         <a href="{{ route('admin.home') }}" class="nav-link">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Tambah Kelas
                             </p>
                         </a>
                     </li>

                     <li class="nav-item">
                         <a href="{{ route('admin.home') }}" class="nav-link">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Tentukan Kelas
                             </p>
                         </a>
                     </li>

                     <li class="nav-item">
                         <a href="{{ route('admin.home') }}" class="nav-link">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Tentukan Ketua Jabatan
                             </p>
                         </a>
                     </li>
                 @endrole

                 @role('lecturer')
                     <li class="nav-item">
                         <a href="{{ route('lecturer.home') }}" class="nav-link">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Dashboard
                             </p>
                         </a>
                     </li>

                     <li
                         class="nav-item {{ Route::is('lecturer.home.*') || Route::is('lecturer.home.*') ? 'menu-open' : '' }}">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-cogs"></i>
                             <p>
                                 I'adah Hafazan Baru
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('lecturer.home') }}"
                                     class="nav-link {{ Route::is('lecturer.home*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>
                                         Tasmik
                                     </p>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <li
                         class="nav-item {{ Route::is('lecturer.home.*') || Route::is('lecturer.home.*') ? 'menu-open' : '' }}">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-cogs"></i>
                             <p>
                                 Ulangan Juzuk Terkini
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('lecturer.home') }}"
                                     class="nav-link {{ Route::is('lecturer.home*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>
                                         Tasmik
                                     </p>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <li
                         class="nav-item {{ Route::is('lecturer.home.*') || Route::is('lecturer.home.*') ? 'menu-open' : '' }}">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-cogs"></i>
                             <p>
                                 Ulangan Juzuk Lama
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('lecturer.home') }}"
                                     class="nav-link {{ Route::is('lecturer.home*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>
                                         Tasmik
                                     </p>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <li
                         class="nav-item {{ Route::is('lecturer.home.*') || Route::is('lecturer.home.*') ? 'menu-open' : '' }}">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-cogs"></i>
                             <p>
                                 Prestasi Kelas
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('lecturer.home') }}"
                                     class="nav-link {{ Route::is('lecturer.home*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>
                                         I'adah Hafazan Baru
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('lecturer.home') }}"
                                     class="nav-link {{ Route::is('lecturer.home*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>
                                         Ulangan Juzuk Terkini
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('lecturer.home') }}"
                                     class="nav-link {{ Route::is('lecturer.home*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>
                                         Ulangan Juzuk Lama
                                     </p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                 @endrole

                 @role('student')
                     <li class="nav-item">
                         <a href="{{ route('student.home') }}" class="nav-link">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Dashboard
                             </p>
                         </a>
                     </li>

                     <li
                         class="nav-item {{ Route::is('student.home.*') || Route::is('student.home.*') ? 'menu-open' : '' }}">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-cogs"></i>
                             <p>
                                 I'adah Hafazan Baru
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('student.home') }}"
                                     class="nav-link {{ Route::is('student.home*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>
                                         Tasmik
                                     </p>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <li
                         class="nav-item {{ Route::is('studnet.home.*') || Route::is('student.home.*') ? 'menu-open' : '' }}">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-cogs"></i>
                             <p>
                                 Ulangan Juzuk Terkini
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('student.home') }}"
                                     class="nav-link {{ Route::is('student.home*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>
                                         Tasmik
                                     </p>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <li
                         class="nav-item {{ Route::is('student.home.*') || Route::is('student.home.*') ? 'menu-open' : '' }}">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-cogs"></i>
                             <p>
                                 Ulangan Juzuk Lama
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('student.home') }}"
                                     class="nav-link {{ Route::is('admin.home*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>
                                         Tasmik
                                     </p>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <li class="nav-item">
                         <a href="{{ route('student.home') }}" class="nav-link">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Prestasi
                             </p>
                         </a>
                     </li>
                 @endrole

                 @role('hod')
                     <li class="nav-item">
                         <a href="{{ route('hod.home') }}" class="nav-link">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Dashboard
                             </p>
                         </a>
                     </li>

                     <li class="nav-item {{ Route::is('hod.home.*') || Route::is('hod.home.*') ? 'menu-open' : '' }}">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-cogs"></i>
                             <p>
                                 Prestasi Kelas
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('hod.home') }}"
                                     class="nav-link {{ Route::is('hod.home*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>
                                         I'adah Hafazan Baru
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('hod.home') }}"
                                     class="nav-link {{ Route::is('hod.home*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>
                                         Ulangan Juzuk Terkini
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('hod.home') }}"
                                     class="nav-link {{ Route::is('hod.home*') ? 'active' : '' }}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>
                                         Ulangan Juzuk Lama
                                     </p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                 @endrole
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
