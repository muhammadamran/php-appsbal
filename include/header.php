<div id="kt_app_header" class="app-header d-flex flex-column flex-stack">
    <div class="d-flex align-items-center flex-stack flex-grow-1">
        <div class="app-header-logo d-flex align-items-center flex-stack px-lg-11 mb-2" id="kt_app_header_logo">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px ms-3 me-2 d-flex d-lg-none"
                id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
            <?php if ($logo_img == NULL) {
                $ilogo = 'none';
                $tlogo = 'show';
            } else {
                $ilogo = 'show';
                $tlogo = 'none';
            } ?>
            <a href="index.php" class="app-sidebar-logo" style="display: <?= $ilogo; ?>">
                <img alt="Logo" src="assets/my-content/logo/<?= $logo_img; ?>" class="h-45px theme-light-show" />
                <img alt="Logo" src="assets/my-content/logo/<?= $logo_img; ?>" class="h-45px theme-dark-show" />
            </a>
            <a href="index.php" class="app-sidebar-logo" style="display: <?= $tlogo; ?>">
                <div style="display: flex;justify-content: flex-start;align-items: center;">
                    <div style="margin-top: 0px;">
                        <img src="assets/my-content/icon/<?= $icon_img; ?>" alt="Icon" style="width: 50px;">
                    </div>
                    <div style="margin-left: 1px;">
                        <h1 class="page-heading d-flex flex-column text-dark fw-bolder">L<font
                                style="display: contents;color: #f6c000;">o</font>GiFlow<sup class="for-sup">LoGiFlow
                                Invoice ERP</sup>
                        </h1>
                    </div>
                </div>
            </a>
            <div id="kt_app_sidebar_toggle"
                class="app-sidebar-toggle btn btn-sm btn-icon btn-color-warning me-n2 d-none d-lg-flex"
                data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                data-kt-toggle-name="app-sidebar-minimize">
                <i class="ki-duotone ki-exit-left fs-2x rotate-180">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
        </div>
        <div class="app-navbar flex-grow-1 justify-content-end" id="kt_app_header_navbar">
            <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1 me-2 me-lg-0"
                style="justify-content: center;">
                <div class="topnav">
                    <a href="#home" class="active">Home</a>
                    <a href="#news" class="">Point of Sales</a>
                    <a href="#contact">Operation</a>
                    <a href="#contact">Accounting</a>
                    <a href="#contact">General Report</a>
                    <a href="#about">Settings</a>
                </div>
            </div>
            <div class="app-navbar-item me-lg-1">
                <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3"
                                d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z"
                                fill="black" />
                            <path
                                d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z"
                                fill="#d3d0d3" />
                        </svg>
                    </span>
                </div>
                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true"
                    id="kt_menu_notifications">
                    <div class="d-flex flex-column bgi-no-repeat rounded-top"
                        style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
                            <span class="fs-8 opacity-75 ps-3">24 reports</span>
                        </h3>
                        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab"
                                    href="#kt_topbar_notifications_1">Alerts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                    data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab"
                                    href="#kt_topbar_notifications_3">Logs</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                            <div class="scroll-y mh-325px my-5 px-8">
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px me-4">
                                            <span class="symbol-label bg-light-primary">
                                                <i class="ki-duotone ki-abstract-28 fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                Alice</a>
                                            <div class="text-gray-400 fs-7">Phase 1 development</div>
                                        </div>
                                    </div>
                                    <span class="badge badge-light fs-8">1 hr</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px me-4">
                                            <span class="symbol-label bg-light-danger">
                                                <i class="ki-duotone ki-information fs-2 text-danger">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                                Confidential</a>
                                            <div class="text-gray-400 fs-7">Confidential staff documents</div>
                                        </div>
                                    </div>
                                    <span class="badge badge-light fs-8">2 hrs</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px me-4">
                                            <span class="symbol-label bg-light-warning">
                                                <i class="ki-duotone ki-briefcase fs-2 text-warning">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
                                                HR</a>
                                            <div class="text-gray-400 fs-7">Corporeate staff profiles</div>
                                        </div>
                                    </div>
                                    <span class="badge badge-light fs-8">5 hrs</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <i class="ki-duotone ki-abstract-12 fs-2 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                Redux</a>
                                            <div class="text-gray-400 fs-7">New frontend admin theme</div>
                                        </div>
                                    </div>
                                    <span class="badge badge-light fs-8">2 days</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px me-4">
                                            <span class="symbol-label bg-light-primary">
                                                <i class="ki-duotone ki-colors-square fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                Breafing</a>
                                            <div class="text-gray-400 fs-7">Product launch status update</div>
                                        </div>
                                    </div>
                                    <span class="badge badge-light fs-8">21 Jan</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px me-4">
                                            <span class="symbol-label bg-light-info">
                                                <i class="ki-duotone ki-picture fs-2 text-info"></i>
                                            </span>
                                        </div>
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
                                                Assets</a>
                                            <div class="text-gray-400 fs-7">Collection of banner images</div>
                                        </div>
                                    </div>
                                    <span class="badge badge-light fs-8">21 Jan</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px me-4">
                                            <span class="symbol-label bg-light-warning">
                                                <i class="ki-duotone ki-color-swatch fs-2 text-warning">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                    <span class="path6"></span>
                                                    <span class="path7"></span>
                                                    <span class="path8"></span>
                                                    <span class="path9"></span>
                                                    <span class="path10"></span>
                                                    <span class="path11"></span>
                                                    <span class="path12"></span>
                                                    <span class="path13"></span>
                                                    <span class="path14"></span>
                                                    <span class="path15"></span>
                                                    <span class="path16"></span>
                                                    <span class="path17"></span>
                                                    <span class="path18"></span>
                                                    <span class="path19"></span>
                                                    <span class="path20"></span>
                                                    <span class="path21"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
                                                Assets</a>
                                            <div class="text-gray-400 fs-7">Collection of SVG icons</div>
                                        </div>
                                    </div>
                                    <span class="badge badge-light fs-8">20 March</span>
                                </div>
                            </div>
                            <div class="py-3 text-center border-top">
                                <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                    <i class="ki-duotone ki-arrow-right fs-5">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                            <div class="d-flex flex-column px-9">
                                <div class="pt-10 pb-0">
                                    <h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
                                    <div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest.
                                        They stoping you from amazing poorly about drive</div>
                                    <div class="text-center mt-5 mb-9">
                                        <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                    </div>
                                </div>
                                <div class="text-center px-4">
                                    <img class="mw-100 mh-200px" alt="image"
                                        src="assets/media/illustrations/sketchy-1/1.png" />
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                            <div class="scroll-y mh-325px my-5 px-8">
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center me-2">
                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                                    </div>
                                    <span class="badge badge-light fs-8">Just now</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center me-2">
                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New
                                            customer</a>
                                    </div>
                                    <span class="badge badge-light fs-8">2 hrs</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center me-2">
                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment
                                            process</a>
                                    </div>
                                    <span class="badge badge-light fs-8">5 hrs</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center me-2">
                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search
                                            query</a>
                                    </div>
                                    <span class="badge badge-light fs-8">2 days</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center me-2">
                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API
                                            connection</a>
                                    </div>
                                    <span class="badge badge-light fs-8">1 week</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center me-2">
                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database
                                            restore</a>
                                    </div>
                                    <span class="badge badge-light fs-8">Mar 5</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center me-2">
                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System
                                            update</a>
                                    </div>
                                    <span class="badge badge-light fs-8">May 15</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center me-2">
                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS
                                            update</a>
                                    </div>
                                    <span class="badge badge-light fs-8">Apr 3</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center me-2">
                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API
                                            rollback</a>
                                    </div>
                                    <span class="badge badge-light fs-8">Jun 30</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center me-2">
                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund
                                            process</a>
                                    </div>
                                    <span class="badge badge-light fs-8">Jul 10</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center me-2">
                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
                                            process</a>
                                    </div>
                                    <span class="badge badge-light fs-8">Sep 10</span>
                                </div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center me-2">
                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                                    </div>
                                    <span class="badge badge-light fs-8">Dec 10</span>
                                </div>
                            </div>
                            <div class="py-3 text-center border-top">
                                <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                    <i class="ki-duotone ki-arrow-right fs-5">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-navbar-item ms-3 ms-lg-4 me-lg-2" id="kt_header_user_menu_toggle">
                <div class="cursor-pointer symbol symbol-30px symbol-lg-40px"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <!-- <img src="assets/media/avatars/300-2.jpg" alt="user" /> -->
                    <div class="avatar avatar-md">
                        <div class="header-profiles">
                            <?php
                            $showU = substr($_SESSION['first_name'], 0, 1) . "" . substr($_SESSION['last_name'], 0, 1);
                            ?>
                            <font class="page-heading d-flex flex-column text-dark fw-bolder"
                                style="font-size: 15px;text-transform: uppercase;"><?= $showU; ?></font>
                        </div>
                    </div>
                </div>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true">
                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <div class="symbol symbol-50px me-5">
                                <div class="avatar avatar-md">
                                    <div class="header-profiles">
                                        <font class="page-heading d-flex flex-column text-dark fw-bolder"
                                            style="font-size: 15px;text-transform: uppercase;"><?= $showU; ?></font>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="fw-bold d-flex align-items-center fs-5"><?= $_SESSION['first_name'] ?>
                                    <?= $_SESSION['last_name'] ?>
                                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Online</span>
                                </div>
                                <a href="#"
                                    class="fw-semibold text-muted text-hover-primary fs-7"><?= $_SESSION['email'] ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="separator my-2"></div>
                    <div class="menu-item px-5">
                        <a href="index.php?m=profile&s=index" class="menu-link px-5">My Profile</a>
                    </div>
                    <div class="separator my-2"></div>
                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                        <a href="#" class="menu-link px-5">
                            <span class="menu-title position-relative">Mode
                                <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                    <i class="ki-duotone ki-night-day theme-light-show fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                        <span class="path9"></span>
                                        <span class="path10"></span>
                                    </i>
                                    <i class="ki-duotone ki-moon theme-dark-show fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </span>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                            data-kt-menu="true" data-kt-element="theme-mode-menu">
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-night-day fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                            <span class="path7"></span>
                                            <span class="path8"></span>
                                            <span class="path9"></span>
                                            <span class="path10"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Light</span>
                                </a>
                            </div>
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-moon fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Dark</span>
                                </a>
                            </div>
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-screen fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">System</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item px-5">
                        <a href="logout.php" class="menu-link px-5">Log Out</a>
                    </div>
                </div>
            </div>
            <div class="app-navbar-item ms-3 ms-lg-4 me-lg-6">
                <a href="index.php?m=settings&s=index"
                    class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px">
                    <i class="ki-duotone ki-setting-3 fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                    </i>
                </a>
            </div>
            <div class="app-navbar-item ms-3 ms-lg-4 ms-n2 me-3 d-flex d-lg-none">
                <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                    id="kt_app_aside_mobile_toggle">
                    <i class="ki-duotone ki-burger-menu-2 fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        <span class="path6"></span>
                        <span class="path7"></span>
                        <span class="path8"></span>
                        <span class="path9"></span>
                        <span class="path10"></span>
                    </i>
                </div>
            </div>
        </div>
    </div>
    <div class="app-header-separator"></div>
</div>