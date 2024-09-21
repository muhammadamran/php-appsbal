<title>Create Monthly Expenses Master - Dashboard | <?= $app_name; ?> &copy Official </title>
<div class="d-flex flex-column flex-column-fluid">
    <!-- Begin Page Header -->
    <div id="kt_app_toolbar" class="app-toolbar pt-5">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column gap-1 me-3 mb-2">
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Dashboard</li>
                        <li class="breadcrumb-item">
                            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                        </li>
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Create Monthly Expenses Master</li>
                    </ul>
                    <div style="display: flex;align-items: center;margin-top: -10px;margin-left: 0px;">
                        <div style="margin-top: -6px;">
                            <span class="menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                        <div style="margin-left: 5px;">
                            <h1 class="page-heading d-flex flex-column text-dark fw-bolder fs-1 lh-0">Create Monthly Expenses Master</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Navbar-->
            <div style="margin-top: -30px;">
                <div class="card-body">
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                        <li class="nav-item mt-2">
                            <a class="nav-link ms-0 me-10 py-5 active" href="index.php?m=dashboard&s=create-expenses-master">Form Monthly Expenses Master</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end::Navbar-->
            <div class="card mb-5 mb-xl-10" style="margin-top: 15px;">
                <div class="row" style="padding: 15px;">
                    <div class="col-12">
                        <div style="display: flex;justify-content:space-between;align-items: center;">
                            <div>
                                <div class="dja">
                                    <div>
                                        <span class="svg-icon svg-icon-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="#7E8299" />
                                                <rect x="11" y="11" width="2" height="2" rx="1" fill="#000" />
                                                <rect x="11" y="15" width="2" height="2" rx="1" fill="#000" />
                                                <rect x="11" y="7" width="2" height="2" rx="1" fill="#000" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div style="margin-left: 5px;">
                                        <h6 class="fw-bold m-0">Create Monthly Expenses Master</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="index.php" class="btn btn-sm btn-secondary">
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                            <path d="M12.0657 12.5657L14.463 14.963C14.7733 15.2733 14.8151 15.7619 14.5621 16.1204C14.2384 16.5789 13.5789 16.6334 13.1844 16.2342L9.69464 12.7029C9.30968 12.3134 9.30968 11.6866 9.69464 11.2971L13.1844 7.76582C13.5789 7.3666 14.2384 7.42107 14.5621 7.87962C14.8151 8.23809 14.7733 8.72669 14.463 9.03696L12.0657 11.4343C11.7533 11.7467 11.7533 12.2533 12.0657 12.5657Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <div class="card">
                        <div class="card-body p-lg-9" style="margin-bottom: -55px;">
                            <!--begin::Layout-->
                            <div class="d-flex flex-column flex-lg-row mb-0">
                                <!--begin::Content-->
                                <div class="flex-lg-row-fluid me-0 me-lg-20">
                                    <!--begin::Form-->
                                    <form action="pages/dashboard/action/action.php" class="form mb-15" method="POST">
                                        <div class="row mb-5">
                                            <div class="col-md-12 fv-row">
                                                <label class="required fs-5 fw-semibold mb-2">Expenses Name</label>
                                                <input type="text" class="form-control" name="expenses_name" placeholder="Expenses Name ..." required>
                                                <input type="hidden" class="form-control" name="modul" value="<?= $_GET['m']; ?>">
                                                <input type="hidden" class="form-control" name="page" value="<?= $_GET['s']; ?>">
                                            </div>
                                            <div class="col-md-6 fv-row" style="margin-top:10px">
                                                <label class="required fs-5 fw-semibold mb-2">Account Name</label>
                                                <select name="account_id" data-control="select2" data-placeholder="Choose Account..." class="form-select">
                                                    <option value=""></option>
                                                    <?php $qaccount = $db->query("SELECT * FROM accounts ORDER BY name ASC"); ?>
                                                    <?php foreach ($qaccount as $row) : ?>
                                                        <option value="<?= $row['account_id']; ?>">ID<?= $row['account_id']; ?> - <?= $row['name']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6 fv-row" style="margin-top:10px">
                                                <label class="required fs-5 fw-semibold mb-2">Year</label>
                                                <select name="expenses_year" data-control="select2" data-placeholder="Choose Year..." class="form-select">
                                                    <option value=""></option>
                                                    <?php for ($i = date("Y") - 1; $i < date("Y") + 1; $i++) : ?>
                                                        <option value="<?= $i ?>"><?= $i ?></option>
                                                    <?php endfor ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="separator mb-5"></div>
                                        <button type="submit" name="add_expenses_" class="btn btn-md btn-secondary">
                                            Save
                                        </button>
                                    </form>
                                </div>
                                <!--begin::Sidebar-->
                                <div class="flex-lg-row-auto w-100 w-lg-275px w-xxl-350px">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <div class="mb-7">
                                                <div class="dja" style="margin-bottom:10px">
                                                    <div style="margin-left: -5px;">
                                                        <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                                                <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div style="margin-left: 5px;">
                                                        <h5 class="fs-1 text-gray w-bolder" style="margin-bottom:0px !important">Form Instruction</h5>
                                                    </div>
                                                </div>
                                                <div class="separator mb-5"></div>
                                                <p class="fw-semibold fs-6 text-gray-600">Please fill in the master expenses for 1 account with 1 expenses in the current year.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Sidebar-->
                            </div>
                            <!--end::Layout-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>