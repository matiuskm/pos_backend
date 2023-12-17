<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">POS Arunika</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">PA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="/home" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::route()->named('users.create') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('users.create') }}">Add New User</a>
                    </li>
                    <li class='{{ Request::route()->named('users.index') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('users.index') }}">User List</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-shopping-bag"></i><span>Products</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::route()->named('products.create') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('products.create') }}">Add New Product</a>
                    </li>
                    <li class='{{ Request::route()->named('products.index') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('products.index') }}">Product List</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
