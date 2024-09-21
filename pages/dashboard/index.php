<title>Dashboard | <?= $app_name; ?> &copy Official </title>
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
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M20 14H11C10.4 14 10 13.6 10 13V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V13C21 13.6 20.6 14 20 14ZM21 20V17C21 16.4 20.6 16 20 16H11C10.4 16 10 16.4 10 17V20C10 20.6 10.4 21 11 21H20C20.6 21 21 20.6 21 20Z" fill="currentColor" />
                                    <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z" fill="currentColor" />
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
            <!--begin::Navbar-->
            <div style="margin-top: -30px;">
                <div class="card-body">
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                        <li class="nav-item mt-2">
                            <a class="nav-link ms-0 me-10 py-5 active" href="index.php">Overview</a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link ms-0 me-10 py-5" href="#">History Cash Flow</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end::Navbar-->
            <!-- Begin Income -->
            <div class="card mb-5 mb-xl-10" style="margin-top: 15px;">
                <div class="row" style="padding: 15px;">
                    <div class="col-12">
                        <div style="display: flex;justify-content:space-between;align-items: center;">
                            <div>
                                <div class="dja">
                                    <div>
                                        <!-- <img src="assets/icon-3d/income.svg" alt="Income" style="width: 45px;padding:5px"> -->
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
                                        <h6 class="fw-bold m-0">Income Details: <?= date('Y') ?></h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="index.php?m=dashboard&s=create-income-master" class="btn btn-sm btn-secondary">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                        </svg>
                                    </span>
                                    New Income Master
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <div class="card">
                        <div class="card-body" style="margin-top: -25px;padding: 35px 0px 0px 0px;">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="">
                                    <thead style="background: #00906b;">
                                        <tr class="fs-7 text-white" style="font-size: 12px !important;font-weight:300 !important;;">
                                            <th>#</th>
                                            <th class="min-w-125px">Account</th>
                                            <th class="min-w-125px">Bank</th>
                                            <th class="min-w-150px">Description</th>
                                            <th class="min-w-20px">Jan<font style="color:transparent">.</font>01</th>
                                            <th class="min-w-20px">Feb<font style="color:transparent">.</font>02</th>
                                            <th class="min-w-20px">Mar<font style="color:transparent">.</font>03</th>
                                            <th class="min-w-20px">Apr<font style="color:transparent">.</font>04</th>
                                            <th class="min-w-20px">May<font style="color:transparent">.</font>05</th>
                                            <th class="min-w-20px">Jun<font style="color:transparent">.</font>06</th>
                                            <th class="min-w-20px">Jul<font style="color:transparent">.</font>07</th>
                                            <th class="min-w-20px">Aug<font style="color:transparent">.</font>08</th>
                                            <th class="min-w-20px">Sep<font style="color:transparent">.</font>09</th>
                                            <th class="min-w-20px">Oct<font style="color:transparent">.</font>10</th>
                                            <th class="min-w-20px">Nov<font style="color:transparent">.</font>11</th>
                                            <th class="min-w-20px">Dec<font style="color:transparent">.</font>12</th>
                                            <th rowspan="2" class="text-center min-w-100px datatable-nosort">Tren</th>
                                            <th rowspan="2" class="text-center min-w-100px datatable-nosort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                        <?php $dataquery = $db->query("SELECT * FROM income WHERE income_year='$fyear' ORDER BY income_id DESC"); ?>
                                        <?php
                                        if (mysqli_num_rows($dataquery) > 0) {
                                            $no = 0;
                                            while ($row = mysqli_fetch_array($dataquery)) {
                                                $no++;
                                        ?>
                                                <tr class="fs-7 text-black" style="font-size: 12px !important;font-weight:500 !important;;">
                                                    <td><?= $no ?>.</td>
                                                    <td><?= $row['account_name'] ?></td>
                                                    <td><?= $row['bank_name'] ?></td>
                                                    <td><?= $row['income_name'] ?></td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on January <?= $fyear ?>">
                                                            <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_amount_<?= $row['income_id']; ?>_jan" style="color: #000;"> -->
                                                            <?php if ($row['income_jan'] == NULL || $row['income_jan'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-income-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="income_id" value="<?= $row['income_id']; ?>">
                                                                    <input type="hidden" name="income_month" value="01">
                                                                    <input type="hidden" name="income_year" value="<?= $row['income_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['income_jan'] == NULL ? 'Rp. 0' : '' . Rupiah($row['income_jan'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-income-detail-edit&id=<?= $row['income_id']; ?>&month=01&year=<?= $row['income_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['income_jan'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on February <?= $fyear ?>">
                                                            <?php if ($row['income_feb'] == NULL || $row['income_feb'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-income-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="income_id" value="<?= $row['income_id']; ?>">
                                                                    <input type="hidden" name="income_month" value="02">
                                                                    <input type="hidden" name="income_year" value="<?= $row['income_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['income_feb'] == NULL ? 'Rp. 0' : '' . Rupiah($row['income_feb'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-income-detail-edit&id=<?= $row['income_id']; ?>&month=02&year=<?= $row['income_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['income_feb'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on March <?= $fyear ?>">
                                                            <?php if ($row['income_mar'] == NULL || $row['income_mar'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-income-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="income_id" value="<?= $row['income_id']; ?>">
                                                                    <input type="hidden" name="income_month" value="03">
                                                                    <input type="hidden" name="income_year" value="<?= $row['income_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['income_mar'] == NULL ? 'Rp. 0' : '' . Rupiah($row['income_mar'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-income-detail-edit&id=<?= $row['income_id']; ?>&month=03&year=<?= $row['income_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['income_mar'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on April <?= $fyear ?>">
                                                            <?php if ($row['income_apr'] == NULL || $row['income_apr'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-income-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="income_id" value="<?= $row['income_id']; ?>">
                                                                    <input type="hidden" name="income_month" value="04">
                                                                    <input type="hidden" name="income_year" value="<?= $row['income_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['income_apr'] == NULL ? 'Rp. 0' : '' . Rupiah($row['income_apr'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-income-detail-edit&id=<?= $row['income_id']; ?>&month=04&year=<?= $row['income_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['income_apr'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on May <?= $fyear ?>">
                                                            <?php if ($row['income_may'] == NULL || $row['income_may'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-income-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="income_id" value="<?= $row['income_id']; ?>">
                                                                    <input type="hidden" name="income_month" value="05">
                                                                    <input type="hidden" name="income_year" value="<?= $row['income_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['income_may'] == NULL ? 'Rp. 0' : '' . Rupiah($row['income_may'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-income-detail-edit&id=<?= $row['income_id']; ?>&month=05&year=<?= $row['income_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['income_may'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on Juny <?= $fyear ?>">
                                                            <?php if ($row['income_jun'] == NULL || $row['income_jun'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-income-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="income_id" value="<?= $row['income_id']; ?>">
                                                                    <input type="hidden" name="income_month" value="06">
                                                                    <input type="hidden" name="income_year" value="<?= $row['income_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['income_jun'] == NULL ? 'Rp. 0' : '' . Rupiah($row['income_jun'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-income-detail-edit&id=<?= $row['income_id']; ?>&month=06&year=<?= $row['income_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['income_jun'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on July <?= $fyear ?>">
                                                            <?php if ($row['income_jul'] == NULL || $row['income_jul'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-income-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="income_id" value="<?= $row['income_id']; ?>">
                                                                    <input type="hidden" name="income_month" value="07">
                                                                    <input type="hidden" name="income_year" value="<?= $row['income_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['income_jul'] == NULL ? 'Rp. 0' : '' . Rupiah($row['income_jul'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-income-detail-edit&id=<?= $row['income_id']; ?>&month=07&year=<?= $row['income_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['income_jul'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on August <?= $fyear ?>">
                                                            <?php if ($row['income_aug'] == NULL || $row['income_aug'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-income-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="income_id" value="<?= $row['income_id']; ?>">
                                                                    <input type="hidden" name="income_month" value="08">
                                                                    <input type="hidden" name="income_year" value="<?= $row['income_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['income_aug'] == NULL ? 'Rp. 0' : '' . Rupiah($row['income_aug'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-income-detail-edit&id=<?= $row['income_id']; ?>&month=08&year=<?= $row['income_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['income_aug'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on September <?= $fyear ?>">
                                                            <?php if ($row['income_sep'] == NULL || $row['income_sep'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-income-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="income_id" value="<?= $row['income_id']; ?>">
                                                                    <input type="hidden" name="income_month" value="09">
                                                                    <input type="hidden" name="income_year" value="<?= $row['income_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['income_sep'] == NULL ? 'Rp. 0' : '' . Rupiah($row['income_sep'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-income-detail-edit&id=<?= $row['income_id']; ?>&month=09&year=<?= $row['income_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['income_sep'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on October <?= $fyear ?>">
                                                            <?php if ($row['income_oct'] == NULL || $row['income_oct'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-income-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="income_id" value="<?= $row['income_id']; ?>">
                                                                    <input type="hidden" name="income_month" value="10">
                                                                    <input type="hidden" name="income_year" value="<?= $row['income_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['income_oct'] == NULL ? 'Rp. 0' : '' . Rupiah($row['income_oct'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-income-detail-edit&id=<?= $row['income_id']; ?>&month=10&year=<?= $row['income_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['income_oct'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on November <?= $fyear ?>">
                                                            <?php if ($row['income_nov'] == NULL || $row['income_nov'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-income-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="income_id" value="<?= $row['income_id']; ?>">
                                                                    <input type="hidden" name="income_month" value="11">
                                                                    <input type="hidden" name="income_year" value="<?= $row['income_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['income_nov'] == NULL ? 'Rp. 0' : '' . Rupiah($row['income_nov'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-income-detail-edit&id=<?= $row['income_id']; ?>&month=11&year=<?= $row['income_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['income_nov'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on December <?= $fyear ?>">
                                                            <?php if ($row['income_dec'] == NULL || $row['income_dec'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-income-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="income_id" value="<?= $row['income_id']; ?>">
                                                                    <input type="hidden" name="income_month" value="12">
                                                                    <input type="hidden" name="income_year" value="<?= $row['income_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['income_dec'] == NULL ? 'Rp. 0' : '' . Rupiah($row['income_dec'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-income-detail-edit&id=<?= $row['income_id']; ?>&month=12&year=<?= $row['income_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['income_dec'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <tr>
                                                <td colspan="18">
                                                    <center>
                                                        <div style="display: grid;">
                                                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
                                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <font class="fw-bolder text-muted">No data in this table</font>
                                                        </div>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Income -->
            <!-- Begin Monthly Expenses -->
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
                                        <h6 class="fw-bold m-0">Monthly Expenses Details: <?= date('Y') ?></h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="index.php?m=dashboard&s=create-expenses-master" class="btn btn-sm btn-secondary">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                        </svg>
                                    </span>
                                    New Monthly Expenses Master
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <div class="card">
                        <div class="card-body" style="margin-top: -25px;padding: 35px 0px 0px 0px;">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="">
                                    <thead style="background: #00906b;">
                                        <tr class="fs-7 text-white" style="font-size: 12px !important;font-weight:300 !important;;">
                                            <th>#</th>
                                            <th class="min-w-125px">Account</th>
                                            <th class="min-w-125px">Name</th>
                                            <th class="min-w-20px">Jan<font style="color:transparent">.</font>01</th>
                                            <th class="min-w-20px">Feb<font style="color:transparent">.</font>02</th>
                                            <th class="min-w-20px">Mar<font style="color:transparent">.</font>03</th>
                                            <th class="min-w-20px">Apr<font style="color:transparent">.</font>04</th>
                                            <th class="min-w-20px">May<font style="color:transparent">.</font>05</th>
                                            <th class="min-w-20px">Jun<font style="color:transparent">.</font>06</th>
                                            <th class="min-w-20px">Jul<font style="color:transparent">.</font>07</th>
                                            <th class="min-w-20px">Aug<font style="color:transparent">.</font>08</th>
                                            <th class="min-w-20px">Sep<font style="color:transparent">.</font>09</th>
                                            <th class="min-w-20px">Oct<font style="color:transparent">.</font>10</th>
                                            <th class="min-w-20px">Nov<font style="color:transparent">.</font>11</th>
                                            <th class="min-w-20px">Dec<font style="color:transparent">.</font>12</th>
                                            <th rowspan="2" class="text-center min-w-100px datatable-nosort">Tren</th>
                                            <th rowspan="2" class="text-center min-w-100px datatable-nosort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                        <?php $dataquery = $db->query("SELECT * FROM expenses WHERE expenses_year='$fyear' ORDER BY expenses_id DESC"); ?>
                                        <?php
                                        if (mysqli_num_rows($dataquery) > 0) {
                                            $no = 0;
                                            while ($row = mysqli_fetch_array($dataquery)) {
                                                $no++;
                                        ?>
                                                <tr class="fs-7 text-black" style="font-size: 12px !important;font-weight:500 !important;;">
                                                    <td><?= $no ?>.</td>
                                                    <td><?= $row['account_name'] ?></td>
                                                    <td><?= $row['expenses_name'] ?></td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on January <?= $fyear ?>">
                                                            <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_amount_<?= $row['expenses_id']; ?>_jan" style="color: #000;"> -->
                                                            <?php if ($row['expenses_jan'] == NULL || $row['expenses_jan'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-expenses-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="expenses_id" value="<?= $row['expenses_id']; ?>">
                                                                    <input type="hidden" name="expenses_name" value="<?= $row['expenses_name']; ?>">
                                                                    <input type="hidden" name="expenses_month" value="01">
                                                                    <input type="hidden" name="expenses_year" value="<?= $row['expenses_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['expenses_jan'] == NULL ? 'Rp. 0' : '' . Rupiah($row['expenses_jan'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-expenses-detail-edit&id=<?= $row['expenses_id']; ?>&month=01&year=<?= $row['expenses_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['expenses_jan'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on February <?= $fyear ?>">
                                                            <?php if ($row['expenses_feb'] == NULL || $row['expenses_feb'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-expenses-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="expenses_id" value="<?= $row['expenses_id']; ?>">
                                                                    <input type="hidden" name="expenses_name" value="<?= $row['expenses_name']; ?>">
                                                                    <input type="hidden" name="expenses_month" value="02">
                                                                    <input type="hidden" name="expenses_year" value="<?= $row['expenses_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['expenses_feb'] == NULL ? 'Rp. 0' : '' . Rupiah($row['expenses_feb'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-expenses-detail-edit&id=<?= $row['expenses_id']; ?>&month=02&year=<?= $row['expenses_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['expenses_feb'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on March <?= $fyear ?>">
                                                            <?php if ($row['expenses_mar'] == NULL || $row['expenses_mar'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-expenses-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="expenses_id" value="<?= $row['expenses_id']; ?>">
                                                                    <input type="hidden" name="expenses_name" value="<?= $row['expenses_name']; ?>">
                                                                    <input type="hidden" name="expenses_month" value="03">
                                                                    <input type="hidden" name="expenses_year" value="<?= $row['expenses_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['expenses_mar'] == NULL ? 'Rp. 0' : '' . Rupiah($row['expenses_mar'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-expenses-detail-edit&id=<?= $row['expenses_id']; ?>&month=03&year=<?= $row['expenses_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['expenses_mar'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on April <?= $fyear ?>">
                                                            <?php if ($row['expenses_apr'] == NULL || $row['expenses_apr'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-expenses-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="expenses_id" value="<?= $row['expenses_id']; ?>">
                                                                    <input type="hidden" name="expenses_name" value="<?= $row['expenses_name']; ?>">
                                                                    <input type="hidden" name="expenses_month" value="04">
                                                                    <input type="hidden" name="expenses_year" value="<?= $row['expenses_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['expenses_apr'] == NULL ? 'Rp. 0' : '' . Rupiah($row['expenses_apr'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-expenses-detail-edit&id=<?= $row['expenses_id']; ?>&month=04&year=<?= $row['expenses_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['expenses_apr'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on May <?= $fyear ?>">
                                                            <?php if ($row['expenses_may'] == NULL || $row['expenses_may'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-expenses-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="expenses_id" value="<?= $row['expenses_id']; ?>">
                                                                    <input type="hidden" name="expenses_name" value="<?= $row['expenses_name']; ?>">
                                                                    <input type="hidden" name="expenses_month" value="05">
                                                                    <input type="hidden" name="expenses_year" value="<?= $row['expenses_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['expenses_may'] == NULL ? 'Rp. 0' : '' . Rupiah($row['expenses_may'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-expenses-detail-edit&id=<?= $row['expenses_id']; ?>&month=05&year=<?= $row['expenses_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['expenses_may'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on Juny <?= $fyear ?>">
                                                            <?php if ($row['expenses_jun'] == NULL || $row['expenses_jun'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-expenses-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="expenses_id" value="<?= $row['expenses_id']; ?>">
                                                                    <input type="hidden" name="expenses_name" value="<?= $row['expenses_name']; ?>">
                                                                    <input type="hidden" name="expenses_month" value="06">
                                                                    <input type="hidden" name="expenses_year" value="<?= $row['expenses_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['expenses_jun'] == NULL ? 'Rp. 0' : '' . Rupiah($row['expenses_jun'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-expenses-detail-edit&id=<?= $row['expenses_id']; ?>&month=06&year=<?= $row['expenses_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['expenses_jun'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on July <?= $fyear ?>">
                                                            <?php if ($row['expenses_jul'] == NULL || $row['expenses_jul'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-expenses-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="expenses_id" value="<?= $row['expenses_id']; ?>">
                                                                    <input type="hidden" name="expenses_name" value="<?= $row['expenses_name']; ?>">
                                                                    <input type="hidden" name="expenses_month" value="07">
                                                                    <input type="hidden" name="expenses_year" value="<?= $row['expenses_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['expenses_jul'] == NULL ? 'Rp. 0' : '' . Rupiah($row['expenses_jul'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-expenses-detail-edit&id=<?= $row['expenses_id']; ?>&month=07&year=<?= $row['expenses_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['expenses_jul'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on August <?= $fyear ?>">
                                                            <?php if ($row['expenses_aug'] == NULL || $row['expenses_aug'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-expenses-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="expenses_id" value="<?= $row['expenses_id']; ?>">
                                                                    <input type="hidden" name="expenses_name" value="<?= $row['expenses_name']; ?>">
                                                                    <input type="hidden" name="expenses_month" value="08">
                                                                    <input type="hidden" name="expenses_year" value="<?= $row['expenses_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['expenses_aug'] == NULL ? 'Rp. 0' : '' . Rupiah($row['expenses_aug'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-expenses-detail-edit&id=<?= $row['expenses_id']; ?>&month=08&year=<?= $row['expenses_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['expenses_aug'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on September <?= $fyear ?>">
                                                            <?php if ($row['expenses_sep'] == NULL || $row['expenses_sep'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-expenses-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="expenses_id" value="<?= $row['expenses_id']; ?>">
                                                                    <input type="hidden" name="expenses_name" value="<?= $row['expenses_name']; ?>">
                                                                    <input type="hidden" name="expenses_month" value="09">
                                                                    <input type="hidden" name="expenses_year" value="<?= $row['expenses_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['expenses_sep'] == NULL ? 'Rp. 0' : '' . Rupiah($row['expenses_sep'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-expenses-detail-edit&id=<?= $row['expenses_id']; ?>&month=09&year=<?= $row['expenses_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['expenses_sep'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on October <?= $fyear ?>">
                                                            <?php if ($row['expenses_oct'] == NULL || $row['expenses_oct'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-expenses-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="expenses_id" value="<?= $row['expenses_id']; ?>">
                                                                    <input type="hidden" name="expenses_name" value="<?= $row['expenses_name']; ?>">
                                                                    <input type="hidden" name="expenses_month" value="10">
                                                                    <input type="hidden" name="expenses_year" value="<?= $row['expenses_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['expenses_oct'] == NULL ? 'Rp. 0' : '' . Rupiah($row['expenses_oct'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-expenses-detail-edit&id=<?= $row['expenses_id']; ?>&month=10&year=<?= $row['expenses_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['expenses_oct'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on November <?= $fyear ?>">
                                                            <?php if ($row['expenses_nov'] == NULL || $row['expenses_nov'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-expenses-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="expenses_id" value="<?= $row['expenses_id']; ?>">
                                                                    <input type="hidden" name="expenses_name" value="<?= $row['expenses_name']; ?>">
                                                                    <input type="hidden" name="expenses_month" value="11">
                                                                    <input type="hidden" name="expenses_year" value="<?= $row['expenses_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['expenses_nov'] == NULL ? 'Rp. 0' : '' . Rupiah($row['expenses_nov'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-expenses-detail-edit&id=<?= $row['expenses_id']; ?>&month=11&year=<?= $row['expenses_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['expenses_nov'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Input Amount on December <?= $fyear ?>">
                                                            <?php if ($row['expenses_dec'] == NULL || $row['expenses_dec'] == 0) { ?>
                                                                <form action="index.php?m=dashboard&s=create-expenses-detail" method="POST" style="margin: 0;">
                                                                    <input type="hidden" name="expenses_id" value="<?= $row['expenses_id']; ?>">
                                                                    <input type="hidden" name="expenses_name" value="<?= $row['expenses_name']; ?>">
                                                                    <input type="hidden" name="expenses_month" value="12">
                                                                    <input type="hidden" name="expenses_year" value="<?= $row['expenses_year']; ?>">
                                                                    <button style="border: 0;padding: 0;background: transparent;" name="trn_detail" type="submit">
                                                                        <?= $row['expenses_dec'] == NULL ? 'Rp. 0' : '' . Rupiah($row['expenses_dec'], TRUE); ?>
                                                                    </button>
                                                                </form>
                                                            <?php } else { ?>
                                                                <a href="index.php?m=dashboard&s=create-expenses-detail-edit&id=<?= $row['expenses_id']; ?>&month=12&year=<?= $row['expenses_year'] ?>&usr=<?= $row['account_name'] ?>&bank=<?= $row['bank_name'] ?>" style="color: #000;">
                                                                    <?= str_replace([' ', ',00'], ['', ''], Rupiah($row['expenses_dec'], TRUE)) ?>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <tr>
                                                <td colspan="18">
                                                    <center>
                                                        <div style="display: grid;">
                                                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
                                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <font class="fw-bolder text-muted">No data in this table</font>
                                                        </div>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Expenses -->
        </div>
    </div>
</div>
<script type="text/javascript">
    // AddSuccess
    if (window?.location?.href?.indexOf('AddSuccessE') > -1) {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            html: '<font style="font-weight: 500;">Your data is successfully created and stored in the system</font>',
        })
        history.replaceState({}, '', './index.php');
    }
</script>