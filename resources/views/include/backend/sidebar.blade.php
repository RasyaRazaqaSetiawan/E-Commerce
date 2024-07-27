<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="index.html" class="sidebar-logo">
            <img src="assets/images/logo.png" alt="site logo" class="light-logo">
            <img src="assets/images/logo-light.png" alt="site logo" class="dark-logo">
            <img src="assets/images/logo-icon.png" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-menu-group-title">Manage</li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="bi:tags" class="menu-icon"></iconify-icon>
                    <span>Categories</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('categories.index')}}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>Categories</a>
                    </li>
                    <li>
                        <a href="invoice-list.html"><i
                                class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Sub Categories</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <iconify-icon icon="bi:box" class="menu-icon"></iconify-icon>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <iconify-icon icon="bi:cart-check" class="menu-icon"></iconify-icon>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <iconify-icon icon="bi:people" class="menu-icon"></iconify-icon>
                    <span>Customers</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
