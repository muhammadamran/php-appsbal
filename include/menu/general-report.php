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
    <a class="menu-link <?= empty($_GET['m']) || $_GET['m'] == 'general-report' && $_GET['s'] == 'index' ? 'active' : '' ?>" href="index.php?m=general-report&s=index">
        <span class="menu-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M20 14H11C10.4 14 10 13.6 10 13V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V13C21 13.6 20.6 14 20 14ZM21 20V17C21 16.4 20.6 16 20 16H11C10.4 16 10 16.4 10 17V20C10 20.6 10.4 21 11 21H20C20.6 21 21 20.6 21 20Z" fill="currentColor" />
                <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z" fill="currentColor" />
            </svg>
        </span>
        <span class="menu-title">Dashboard</span>
    </a>
</div>
<!-- Report Sales | Operation | Accounting -->
<div data-kt-menu-trigger="click" class="menu-item menu-accordion <?= !empty($_GET['s']) && $_GET['s'] == 'ga-sales' ||
                                                                        $_GET['s'] == 'ga-operation' ||
                                                                        $_GET['s'] == 'ga-accounting' ? 'show' : '' ?>">
    <span class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'ga-sales' ||
                                $_GET['s'] == 'ga-operation' ||
                                $_GET['s'] == 'ga-accounting' ? 'active' : '' ?>">
        <span class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M17.1 10.5H11.1C10.5 10.5 10.1 10.1 10.1 9.5V8.5C10.1 7.9 10.5 7.5 11.1 7.5H17.1C17.7 7.5 18.1 7.9 18.1 8.5V9.5C18.1 10.1 17.7 10.5 17.1 10.5ZM22.1 4.5V3.5C22.1 2.9 21.7 2.5 21.1 2.5H11.1C10.5 2.5 10.1 2.9 10.1 3.5V4.5C10.1 5.1 10.5 5.5 11.1 5.5H21.1C21.7 5.5 22.1 5.1 22.1 4.5ZM22.1 15.5V14.5C22.1 13.9 21.7 13.5 21.1 13.5H11.1C10.5 13.5 10.1 13.9 10.1 14.5V15.5C10.1 16.1 10.5 16.5 11.1 16.5H21.1C21.7 16.5 22.1 16.1 22.1 15.5ZM18.1 20.5V19.5C18.1 18.9 17.7 18.5 17.1 18.5H11.1C10.5 18.5 10.1 18.9 10.1 19.5V20.5C10.1 21.1 10.5 21.5 11.1 21.5H17.1C17.7 21.5 18.1 21.1 18.1 20.5Z" fill="currentColor" />
                <path d="M5.60001 10.5C5.30001 10.5 5.00002 10.4 4.80002 10.2C4.60002 9.99995 4.5 9.70005 4.5 9.30005V5.40002C3.7 5.90002 3.40001 6 3.10001 6C2.90001 6 2.6 5.89995 2.5 5.69995C2.3 5.49995 2.20001 5.3 2.20001 5C2.20001 4.6 2.4 4.40005 2.5 4.30005C2.6 4.20005 2.80001 4.10002 3.10001 3.90002C3.50001 3.70002 3.8 3.50005 4 3.30005C4.2 3.10005 4.40001 2.89995 4.60001 2.69995C4.80001 2.39995 4.9 2.19995 5 2.19995C5.1 2.09995 5.30001 2 5.60001 2C5.90001 2 6.10002 2.10002 6.30002 2.40002C6.50002 2.60002 6.5 2.89995 6.5 3.19995V9C6.6 10.4 5.90001 10.5 5.60001 10.5ZM7.10001 21.5C7.40001 21.5 7.69999 21.4 7.89999 21.2C8.09999 21 8.20001 20.8 8.20001 20.5C8.20001 20.2 8.10002 19.9 7.80002 19.8C7.60002 19.6 7.3 19.6 7 19.6H5.10001C5.30001 19.4 5.50002 19.2 5.80002 19C6.30002 18.6 6.69999 18.3 6.89999 18.1C7.09999 17.9 7.40001 17.6 7.60001 17.2C7.80001 16.8 8 16.3 8 15.9C8 15.6 7.90002 15.3 7.80002 15C7.70002 14.7 7.50002 14.5 7.30002 14.2C7.10002 14 6.80001 13.8 6.60001 13.7C6.20001 13.5 5.70001 13.4 5.10001 13.4C4.60001 13.4 4.20002 13.5 3.80002 13.6C3.40002 13.7 3.09999 13.9 2.89999 14.2C2.69999 14.4 2.50002 14.7 2.30002 15C2.20002 15.3 2.10001 15.6 2.10001 15.9C2.10001 16.3 2.29999 16.5 2.39999 16.6C2.59999 16.8 2.80001 16.9 3.10001 16.9C3.50001 16.9 3.70002 16.7 3.80002 16.6C3.90002 16.4 4.00001 16.2 4.10001 16C4.20001 15.8 4.20001 15.7 4.20001 15.7C4.40001 15.4 4.59999 15.3 4.89999 15.3C4.99999 15.3 5.20002 15.3 5.30002 15.4C5.40002 15.5 5.50001 15.5 5.60001 15.7C5.70001 15.8 5.70001 15.9 5.70001 16.1C5.70001 16.2 5.70001 16.4 5.60001 16.6C5.50001 16.8 5.40001 16.9 5.20001 17.1C5.00001 17.3 4.80001 17.5 4.60001 17.6C4.40001 17.7 4.20002 17.9 3.80002 18.3C3.40002 18.6 3.00001 19 2.60001 19.5C2.50001 19.6 2.30001 19.8 2.20001 20.1C2.10001 20.4 2 20.6 2 20.7C2 21 2.10002 21.3 2.30002 21.5C2.50002 21.7 2.80001 21.8 3.20001 21.8H7.10001V21.5Z" fill="currentColor" />
            </svg>
        </span>
        <span class="menu-title">General Report</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'ga-sales' ? 'active' : '' ?>" href="index.php?m=general-report&s=ga-sales" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Point of Sales</span>
            </a>
        </div>
    </div>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'ga-operation' ? 'active' : '' ?>" href="index.php?m=general-report&s=ga-operation" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Operation</span>
            </a>
        </div>
    </div>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link <?= !empty($_GET['s']) && $_GET['s'] == 'ga-accounting' ? 'active' : '' ?>" href="index.php?m=general-report&s=ga-accounting" data-kt-page="pro">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Accounting</span>
            </a>
        </div>
    </div>
</div>