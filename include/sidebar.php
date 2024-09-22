<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
        data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
        <div class="d-flex flex-column justify-content-between h-100 hover-scroll-overlay-y my-2 d-flex flex-column"
            id="kt_app_sidebar_main" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_main"
            data-kt-scroll-offset="5px">
            <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
                class="flex-column-fluid menu menu-sub-indention menu-column menu-rounded menu-active-bg mb-7">
                <!-- Begin Section -->
                <div class="menu-item">
                    <a class="menu-link" href="#" style="margin-top: -10px;margin-bottom: -10px;">
                        <span class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect x="10" y="10" width="4" height="4" rx="2" fill="#f6c000" />
                                <rect x="17" y="10" width="4" height="4" rx="2" fill="black" />
                                <rect x="3" y="10" width="4" height="4" rx="2" fill="black" />
                            </svg>
                        </span>
                        <span class="menu-title"
                            style="color: #000;opacity:50%;text-transform: uppercase;font-size: 10px;">Navigation
                            Menu</span>
                    </a>
                </div>
                <!-- End Section -->
                <div class="menu-item ">
                    <a class="menu-link <?= empty($_GET['m']) || $_GET['m'] == 'dashboard' && $_GET['s'] == 'index' || $_GET['s'] == 'create-income-master' || $_GET['s'] == 'create-income-detail' ? 'active' : '' ?>"
                        href="index.php">
                        <span class="menu-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M20 14H11C10.4 14 10 13.6 10 13V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V13C21 13.6 20.6 14 20 14ZM21 20V17C21 16.4 20.6 16 20 16H11C10.4 16 10 16.4 10 17V20C10 20.6 10.4 21 11 21H20C20.6 21 21 20.6 21 20Z"
                                    fill="currentColor" />
                                <path
                                    d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <!-- Begin Section -->
                <div class="menu-item">
                    <a class="menu-link" href="#" style="margin-top: -10px;margin-bottom: -10px;">
                        <span class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect x="10" y="10" width="4" height="4" rx="2" fill="#f6c000" />
                                <rect x="17" y="10" width="4" height="4" rx="2" fill="black" />
                                <rect x="3" y="10" width="4" height="4" rx="2" fill="black" />
                            </svg>
                        </span>
                        <span class="menu-title"
                            style="color: #000;opacity:50%;text-transform: uppercase;font-size: 10px;">Administration</span>
                    </a>
                </div>
                <!-- End Section -->
                <div class="menu-item">
                    <a class="menu-link <?= !empty($_GET['m']) && $_GET['m'] == 'settings' && $_GET['s'] == 'index' ? 'active' : '' ?>"
                        href="index.php?m=settings&s=index">
                        <span class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
                                    fill="currentColor" />
                                <path
                                    d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <span class="menu-title">Settings</span>
                    </a>
                </div>
            </div>
        </div>
    </div>