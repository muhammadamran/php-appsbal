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
    <a class="menu-link <?= empty($_GET['m']) || $_GET['m'] == 'operation' && $_GET['s'] == 'index' ? 'active' : '' ?>" href="index.php?m=operation&s=index">
        <span class="menu-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M20 14H11C10.4 14 10 13.6 10 13V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V13C21 13.6 20.6 14 20 14ZM21 20V17C21 16.4 20.6 16 20 16H11C10.4 16 10 16.4 10 17V20C10 20.6 10.4 21 11 21H20C20.6 21 21 20.6 21 20Z" fill="currentColor" />
                <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z" fill="currentColor" />
            </svg>
        </span>
        <span class="menu-title">Dashboard</span>
    </a>
</div>
<!-- Take Records -->
<div class="menu-item ">
    <a class="menu-link <?= empty($_GET['m']) || $_GET['m'] == 'operation' && $_GET['s'] == 'take-records' ? 'active' : '' ?>" href="index.php?m=operation&s=take-records">
        <span class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="currentColor" />
                <path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="currentColor" />
                <rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="currentColor" />
                <path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="currentColor" />
            </svg>
        </span>
        <span class="menu-title">Take Records</span>
    </a>
</div>
<!-- My Records -->
<div class="menu-item ">
    <a class="menu-link <?= empty($_GET['m']) || $_GET['m'] == 'operation' && $_GET['s'] == 'my-records' ? 'active' : '' ?>" href="index.php?m=operation&s=my-records">
        <span class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="currentColor" />
                <path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="currentColor" />
                <path d="M10.3629 14.0084L8.92108 12.6429C8.57518 12.3153 8.03352 12.3153 7.68761 12.6429C7.31405 12.9967 7.31405 13.5915 7.68761 13.9453L10.2254 16.3488C10.6111 16.714 11.215 16.714 11.6007 16.3488L16.3124 11.8865C16.6859 11.5327 16.6859 10.9379 16.3124 10.5841C15.9665 10.2565 15.4248 10.2565 15.0789 10.5841L11.4631 14.0084C11.1546 14.3006 10.6715 14.3006 10.3629 14.0084Z" fill="currentColor" />
            </svg>
        </span>
        <span class="menu-title">My Records</span>
    </a>
</div>