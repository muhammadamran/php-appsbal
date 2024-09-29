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
    <a class="menu-link <?= empty($_GET['m']) || $_GET['m'] == 'accounting' && $_GET['s'] == 'index' ? 'active' : '' ?>" href="index.php?m=accounting&s=index">
        <span class="menu-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M20 14H11C10.4 14 10 13.6 10 13V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V13C21 13.6 20.6 14 20 14ZM21 20V17C21 16.4 20.6 16 20 16H11C10.4 16 10 16.4 10 17V20C10 20.6 10.4 21 11 21H20C20.6 21 21 20.6 21 20Z" fill="currentColor" />
                <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z" fill="currentColor" />
            </svg>
        </span>
        <span class="menu-title">Dashboard</span>
    </a>
</div>
<!-- Out Invoice -->
<div data-kt-menu-trigger="click" class="menu-item menu-accordion <?= !empty($_GET['s']) && $_GET['s'] == 'out-invoice-records' ||
                                                                        $_GET['s'] == 'ar-invoice' ? 'show' : '' ?>">
    <span class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'out-invoice-records' ||
                                $_GET['s'] == 'ar-invoice' ? 'active' : '' ?>">
        <span class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M21 22H3C2.4 22 2 21.6 2 21C2 20.4 2.4 20 3 20H21C21.6 20 22 20.4 22 21C22 21.6 21.6 22 21 22ZM11 6.59998V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V6.59998H11Z" fill="currentColor" />
                <path opacity="0.3" d="M7 6.59999H17L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L7 6.59999Z" fill="currentColor" />
            </svg>
        </span>
        <span class="menu-title">Out Invoice</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'out-invoice-records' ? 'active' : '' ?>" href="index.php?m=accounting&s=out-invoice-records" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Invoice Records</span>
            </a>
        </div>
    </div>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'ar-invoice' ? 'active' : '' ?>" href="index.php?m=accounting&s=ar-invoice" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">AR Invoice</span>
            </a>
        </div>
    </div>
</div>
<!-- In Invoice -->
<div data-kt-menu-trigger="click" class="menu-item menu-accordion <?= !empty($_GET['s']) && $_GET['s'] == 'in-invoice-records' ||
                                                                        $_GET['s'] == 'payment-details' ? 'show' : '' ?>">
    <span class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'in-invoice-records' ||
                                $_GET['s'] == 'payment-details' ? 'active' : '' ?>">
        <span class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M21 22H3C2.4 22 2 21.6 2 21C2 20.4 2.4 20 3 20H21C21.6 20 22 20.4 22 21C22 21.6 21.6 22 21 22ZM13 13.4V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V13.4H13Z" fill="currentColor" />
                <path opacity="0.3" d="M7 13.4H17L12.7 17.7C12.3 18.1 11.7 18.1 11.3 17.7L7 13.4Z" fill="currentColor" />
            </svg>
        </span>
        <span class="menu-title">In Invoice</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'in-invoice-records' ? 'active' : '' ?>" href="index.php?m=accounting&s=in-invoice-records" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Invoice Records</span>
            </a>
        </div>
    </div>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'payment-details' ? 'active' : '' ?>" href="index.php?m=accounting&s=payment-details" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Payment Details</span>
            </a>
        </div>
    </div>
</div>
<!-- Funds Request -->
<div class="menu-item ">
    <a class="menu-link <?= empty($_GET['m']) || $_GET['m'] == 'accounting' && $_GET['s'] == 'funds-request' ? 'active' : '' ?>" href="index.php?m=accounting&s=funds-request">
        <span class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M20 18H4C3.4 18 3 17.6 3 17V7C3 6.4 3.4 6 4 6H20C20.6 6 21 6.4 21 7V17C21 17.6 20.6 18 20 18ZM12 8C10.3 8 9 9.8 9 12C9 14.2 10.3 16 12 16C13.7 16 15 14.2 15 12C15 9.8 13.7 8 12 8Z" fill="currentColor" />
                <path d="M18 6H20C20.6 6 21 6.4 21 7V9C19.3 9 18 7.7 18 6ZM6 6H4C3.4 6 3 6.4 3 7V9C4.7 9 6 7.7 6 6ZM21 17V15C19.3 15 18 16.3 18 18H20C20.6 18 21 17.6 21 17ZM3 15V17C3 17.6 3.4 18 4 18H6C6 16.3 4.7 15 3 15Z" fill="currentColor" />
            </svg>
        </span>
        <span class="menu-title">Funds Request</span>
    </a>
</div>