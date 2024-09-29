<!-- Begin Section -->
<div class="menu-item">
    <a class="menu-link" href="#" style="margin-top: -10px;margin-bottom: -10px;">
        <span class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect x="10" y="10" width="4" height="4" rx="2" fill="#f6c000" />
                <rect x="17" y="10" width="4" height="4" rx="2" fill="black" />
                <rect x="3" y="10" width="4" height="4" rx="2" fill="black" />
            </svg>
        </span>
        <span class="menu-title" style="color: #000;opacity:50%;text-transform: uppercase;font-size: 10px;">Navigation Menu</span>
    </a>
</div>
<!-- End Section -->
<div class="menu-item ">
    <a class="menu-link <?= empty($_GET['m']) || $_GET['m'] == 'point-of-sales' && $_GET['s'] == 'index' ? 'active' : '' ?>" href="index.php?m=point-of-sales&s=index">
        <span class="menu-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M20 14H11C10.4 14 10 13.6 10 13V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V13C21 13.6 20.6 14 20 14ZM21 20V17C21 16.4 20.6 16 20 16H11C10.4 16 10 16.4 10 17V20C10 20.6 10.4 21 11 21H20C20.6 21 21 20.6 21 20Z" fill="currentColor" />
                <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z" fill="currentColor" />
            </svg>
        </span>
        <span class="menu-title">Dashboard</span>
    </a>
</div>
<!-- Orders -->
<div data-kt-menu-trigger="click" class="menu-item menu-accordion <?= !empty($_GET['s']) && $_GET['s'] == 'new-orders' ||
                                                                        $_GET['s'] == 'completed-orders' ? 'show' : '' ?>">
    <span class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'new-orders' ||
                                $_GET['s'] == 'completed-orders' ? 'active' : '' ?>">
        <span class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="currentColor" />
                <path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="currentColor" />
                <path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="currentColor" />
            </svg>
        </span>
        <span class="menu-title">Orders</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'new-orders' ? 'active' : '' ?>" href="index.php?m=point-of-sales&s=new-orders" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">New Orders</span>
            </a>
        </div>
    </div>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'completed-orders' ? 'active' : '' ?>" href="index.php?m=point-of-sales&s=completed-orders" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Completed Orders</span>
            </a>
        </div>
    </div>
</div>
<!-- Quotation -->
<div data-kt-menu-trigger="click" class="menu-item menu-accordion <?= !empty($_GET['s']) && $_GET['s'] == 'cost-sheet' ||
                                                                        $_GET['s'] == 'generated-records' ||
                                                                        $_GET['s'] == 'completed-records' ? 'show' : '' ?>">
    <span class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'cost-sheet' ||
                                $_GET['s'] == 'generated-records' ||
                                $_GET['s'] == 'completed-records' ? 'active' : '' ?>">
        <span class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M17 10H11C10.4 10 10 9.6 10 9V8C10 7.4 10.4 7 11 7H17C17.6 7 18 7.4 18 8V9C18 9.6 17.6 10 17 10ZM22 4V3C22 2.4 21.6 2 21 2H11C10.4 2 10 2.4 10 3V4C10 4.6 10.4 5 11 5H21C21.6 5 22 4.6 22 4ZM22 15V14C22 13.4 21.6 13 21 13H11C10.4 13 10 13.4 10 14V15C10 15.6 10.4 16 11 16H21C21.6 16 22 15.6 22 15ZM18 20V19C18 18.4 17.6 18 17 18H11C10.4 18 10 18.4 10 19V20C10 20.6 10.4 21 11 21H17C17.6 21 18 20.6 18 20Z" fill="currentColor" />
                <path d="M8 5C8 6.7 6.7 8 5 8C3.3 8 2 6.7 2 5C2 3.3 3.3 2 5 2C6.7 2 8 3.3 8 5ZM5 4C4.4 4 4 4.4 4 5C4 5.6 4.4 6 5 6C5.6 6 6 5.6 6 5C6 4.4 5.6 4 5 4ZM8 16C8 17.7 6.7 19 5 19C3.3 19 2 17.7 2 16C2 14.3 3.3 13 5 13C6.7 13 8 14.3 8 16ZM5 15C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17C5.6 17 6 16.6 6 16C6 15.4 5.6 15 5 15Z" fill="currentColor" />
            </svg>
        </span>
        <span class="menu-title">Quotation</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'cost-sheet' ? 'active' : '' ?>" href="index.php?m=point-of-sales&s=cost-sheet" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Cost Sheet</span>
            </a>
        </div>
    </div>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'generated-records' ? 'active' : '' ?>" href="index.php?m=point-of-sales&s=generated-records" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Generated Records</span>
            </a>
        </div>
    </div>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'completed-records' ? 'active' : '' ?>" href="index.php?m=point-of-sales&s=completed-records" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Completed Records</span>
            </a>
        </div>
    </div>
</div>
<!-- Billing -->
<div data-kt-menu-trigger="click" class="menu-item menu-accordion <?= !empty($_GET['s']) && $_GET['s'] == 'sales-invoice' ||
                                                                        $_GET['s'] == 'approved-invoice' ? 'show' : '' ?>">
    <span class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'sales-invoice' ||
                                $_GET['s'] == 'approved-invoice' ? 'active' : '' ?>">
        <span class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M22 7H2V11H22V7Z" fill="currentColor" />
                <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
            </svg>
        </span>
        <span class="menu-title">Billing</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'sales-invoice' ? 'active' : '' ?>" href="index.php?m=point-of-sales&s=sales-invoice" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Sales Invoice</span>
            </a>
        </div>
    </div>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'approved-invoice' ? 'active' : '' ?>" href="index.php?m=point-of-sales&s=approved-invoice" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Approved Invoice</span>
            </a>
        </div>
    </div>
</div>