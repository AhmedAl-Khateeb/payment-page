 <aside class="main-sidebar sidebar-dark-primary elevation-4">

     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('assets/admin/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">{{ auth('admin')->user()?->name }}</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item has-treeview menu-open">

                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('admin.dashboard') }}"
                                 class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                                 <i class="nav-icon fas fa-tachometer-alt"></i>
                                 <p>Dashboard</p>
                             </a>
                         </li>

                         {{-- <li class="nav-item">
                             <a href="{{ route('admin_panel_settings.index') }}"
                                 class="nav-link {{ request()->routeIs('admin_panel_settings.*') ? 'active' : '' }}">
                                 <i class="nav-icon fas fa-cogs"></i>
                                 <p>Admin Panel Settings</p>
                             </a>
                         </li> --}}


                     </ul>
                 </li>

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
