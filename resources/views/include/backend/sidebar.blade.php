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
            <li class="sidebar-menu-group-title">Application</li>
            <li>
                <a href="email.html">
                    <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                    <span>Email</span>
                </a>
            </li>
            <li>
                <a href="chat-message.html">
                    <iconify-icon icon="bi:chat-dots" class="menu-icon"></iconify-icon>
                    <span>Chat</span>
                </a>
            </li>
            <li>
                <a href="calendar-main.html">
                    <iconify-icon icon="solar:calendar-outline" class="menu-icon"></iconify-icon>
                    <span>Calendar</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Invoice</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="invoice-list.html"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List</a>
                    </li>
                    <li>
                        <a href="invoice-preview.html"><i
                                class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Preview</a>
                    </li>
                    <li>
                        <a href="invoice-add.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                            Add new</a>
                    </li>
                    <li>
                        <a href="invoice-edit.html"><i
                                class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Edit</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
