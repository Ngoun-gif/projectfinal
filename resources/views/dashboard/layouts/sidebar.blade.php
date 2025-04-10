<!-- Sidebar -->

<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #1C1C65">
    <!-- Sidebar - Brand -->
    
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
             <img src="{{ asset('assets/logo/Main-logo.png') }}" alt="Company Logo" style="width: 55%; height: auto;" class="img-fluid">
        </div>
      </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link fs-1" href="/dashboard">
            <i class="fa-solid fa-house fs-5"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Manu
    </div>
    <!-- Branches Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-boxes"></i>
            <span>Branches</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/utilities">Profile</a>
            </div>
        </div>
    </li>
    <!-- Booking -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBooking"
            aria-expanded="true" aria-controls="collapseBooking">
            <i class="fas fa-calendar-check"></i>
            <span>Booking</span>
        </a>
        <div id="collapseBooking" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('/dashboard/customer') }}">Booking</a>
            </div>
        </div>
    </li>
    <!-- User -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomer"
            aria-expanded="true" aria-controls="collapseCustomer">
            <i class="fa-solid fa-users fs-5"></i>
            <span>Customer</span>
        </a>
        <div id="collapseCustomer" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('/dashboard/customer') }}">List Customer</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
            aria-expanded="true" aria-controls="collapseProduct">
            <i class="fa-brands fa-product-hunt fs-4"></i>
            <span>Product & Service</span>
        </a>
        <div id="collapseProduct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="/product_type_1">Products</a>
                <a class="collapse-item" href="/product_type_2">Services</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
            aria-expanded="true" aria-controls="collapseCategory">
            <i class="fa-solid fa-layer-group fs-5"></i>
            <span>Category</span>
        </a>
        <div id="collapseCategory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBrands"
            aria-expanded="true" aria-controls="collapseBrands">
            <i class="fa-solid fa-copyright fs-5"></i>
            <span>Brands</span>
        </a>
        <div id="collapseBrands" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSupplier"
            aria-expanded="true" aria-controls="collapseSupplier">
            <i class="fa-solid fa-suitcase-rolling fs-5"></i>
            <span>Supplier</span>
        </a>
        <div id="collapseSupplier" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/supplier">Supplier</a>
            </div>
        </div>
    </li>

    <!-- Branch -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="far fa-file-alt"></i>
            <span class="ms-1">Invoice</span> <!-- Use `ms-1` for minimal spacing -->
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('/dashboard/branch') }}">Invoice</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
        <i class="fas fa-cog"></i>
        General Settings
    </div>
    <li class="nav-item {{ request()->is('dashboard/user*') || request()->is('dashboard/profile') ? 'active' : '' }}">
        <a class="nav-link {{ request()->is('dashboard/user*') || request()->is('dashboard/profile') ? '' : 'collapsed' }}"
            href="#" data-toggle="collapse" data-target="#collapseUser"
            aria-expanded="{{ request()->is('dashboard/user*') || request()->is('dashboard/profile') ? 'true' : 'false' }}"
            aria-controls="collapseUser">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUser"
            class="collapse {{ request()->is('dashboard/user*') || request()->is('dashboard/profile') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">

            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">
                </h6>
                <a class="collapse-item {{ request()->is('dashboard/user') ? 'active' : '' }}"
                    href="{{ url('/dashboard/user') }}">
                    Users
                </a>
                <a class="collapse-item {{ request()->is('dashboard/profile') ? 'active' : '' }}"
                    href="{{ url('/dashboard/profile') }}">
                    Profile
                </a>
                <a class="collapse-item {{ request()->is('dashboard/profile') ? 'active' : '' }}"
                    href="{{ url('/dashboard/profile') }}">
                    Booking
                </a>
            </div>
        </div>
    </li>
    

</ul>
<!-- End of Sidebar -->
