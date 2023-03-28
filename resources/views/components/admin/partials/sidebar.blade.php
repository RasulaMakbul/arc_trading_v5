<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">
                    <i class="fa-solid fa-house fa-flip fa-lg"></i>
                    Dashboard
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link" href="{{route('products')}}">
                    <i class="fa-regular fa-clipboard fa-bounce fa-lg"></i>
                    Items
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link" href="{{route('vendors')}}">
                    <i class="fa-solid fa-truck-fast fa-bounce fa-lg"></i>
                    Vendors
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link" href="{{route('buyers')}}">
                    <i class="fa-solid fa-person-chalkboard fa-bounce fa-lg"></i>
                    Buyers
                </a>
            </li>
            <hr>

        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Job Details</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    All Purchase Orders
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    PO's Under Process
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Done Purchase
                </a>
            </li>
            <hr>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Year-end sale
                </a>
            </li>
        </ul>
    </div>
</nav>
