<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="/" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>POS Arunika</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="https://i.pravatar.cc/40" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                <span>{{ ucfirst(auth()->user()->roles) }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/" class="nav-item nav-link {{ Request::is('home') ? 'active' : '' }}"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('products*') ? 'active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fas fa-shopping-bag me-2"></i>Products</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('products.create') }}" class="dropdown-item">Add New Product</a>
                    <a href="{{ route('products.index') }}" class="dropdown-item">Product List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('users*') ? 'active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fas fa-user me-2"></i>Users</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('users.create') }}" class="dropdown-item">Add New User</a>
                    <a href="{{ route('users.index') }}" class="dropdown-item">User List</a>
                </div>
            </div>
        </div>
    </nav>
</div>
