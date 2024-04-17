       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SKK  BPR MAA</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Dttot Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dttot"
                aria-expanded="true" aria-controls="dttot">
                <i class="fas fa-fw fa-cog"></i>
                <span>Dttot</span>
            </a>
            <div id="dttot" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">dttot:</h6>
                    <a class="collapse-item" href="{{ route('dttot.index') }}">Upload Data</a>
                    <a class="collapse-item" href="{{ route('dttot.rekap') }}">Rekap Data</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - Sipendar Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sipendar"
                aria-expanded="true" aria-controls="sipendar">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Sipendar</span>
            </a>
            <div id="sipendar" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">sipendar:</h6>
                    <a class="collapse-item" href="buttons.html">Upload Data</a>
                    <a class="collapse-item" href="cards.html">Rekap Data</a>
                </div>
            </div>
        </li>
         <!-- Nav Item - Dppspm Menu -->
         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dppspm"
                aria-expanded="true" aria-controls="dppspm">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Dppspm</span>
            </a>
            <div id="dppspm" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">sipendar:</h6>
                    <a class="collapse-item" href="buttons.html">Upload Data</a>
                    <a class="collapse-item" href="cards.html">Rekap Data</a>
                </div>
            </div>
        </li>
                 <!-- Nav Item - AML Newsletter Menu -->
                 <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#aml"
                        aria-expanded="true" aria-controls="aml">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>AML Newslatter</span>
                    </a>
                    <div id="aml" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">newslatter:</h6>
                            <a class="collapse-item" href="{{ route('aml.index') }}">Upload Data</a>
                            <a class="collapse-item" href="cards.html">Rekap Data</a>
                        </div>
                    </div>
                </li>

        <!-- Divider -->
        <hr class="sidebar-divider">



        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->