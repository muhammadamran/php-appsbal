<title>Home | <?= $app_name; ?> &copy Official </title>
<div class="d-flex flex-column flex-column-fluid">
    <!-- Begin Page Header -->
    <div id="kt_app_toolbar" class="app-toolbar pt-5">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column gap-1 me-3 mb-2">
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Dashboard</li>
                    </ul>
                    <div style="display: flex;align-items: center;margin-top: -10px;margin-left: 0px;">
                        <div style="margin-top: -6px;">
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
                        </div>
                        <div style="margin-left: 5px;">
                            <h1 class="page-heading d-flex flex-column text-dark fw-bolder fs-1 lh-0">Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!-- Begin -->
            <!-- End -->
        </div>
    </div>
</div>
<script type="text/javascript">
    // AddSuccess
    if (window?.location?.href?.indexOf('login') > -1) {
        Swal.fire({
            icon: 'success',
            title: 'Log In Successfully!',
            html: '<font style="font-weight: 500;">Welcome Back, <b><i><u><?= $_SESSION['first_name'] ?> <?= $_SESSION['middle_name'] ?> <?= $_SESSION['last_name'] ?></u></i></b> 👋</font>',
        })
        history.replaceState({}, '', './index.php?m=home&s=index');
    }
</script>