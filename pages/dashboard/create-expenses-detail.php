<?php
if (isset($_POST["trn_detail"])) {
    $gid    = $_POST['expenses_id'];
    $gname  = $_POST['expenses_name'];
    $gmonth = $_POST['expenses_month'];
    $gyear  = $_POST['expenses_year'];

    $query = $db->query("SELECT * FROM expenses WHERE expenses_id='$gid' AND expenses_year='$gyear' LIMIT 1");
    if (mysqli_num_rows($query) != 1) {
        echo "<script>location.href = './index.php?DataFailed'</script>";
    }

    $rquery  = mysqli_fetch_array($query);
    $gusrid  = $rquery['account_id'];
    $gusr    = $rquery['account_name'];
}
if ($gmonth == '01') {
    $saymonth = 'January';
} else if ($gmonth == '02') {
    $saymonth = 'February';
} else if ($gmonth == '03') {
    $saymonth = 'March';
} else if ($gmonth == '04') {
    $saymonth = 'April';
} else if ($gmonth == '05') {
    $saymonth = 'May';
} else if ($gmonth == '06') {
    $saymonth = 'June';
} else if ($gmonth == '07') {
    $saymonth = 'July';
} else if ($gmonth == '08') {
    $saymonth = 'August';
} else if ($gmonth == '09') {
    $saymonth = 'September';
} else if ($gmonth == '10') {
    $saymonth = 'October';
} else if ($gmonth == '11') {
    $saymonth = 'November';
} else if ($gmonth == '12') {
    $saymonth = 'December';
}
?>
<title>Create Monthly Expenses Detail - <?= $gmonth ?> - <?= $saymonth ?> - Dashboard | <?= $app_name; ?> &copy Official </title>
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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Create Monthly Expenses Detail - <?= $gmonth ?> - <?= $saymonth ?></li>
                    </ul>
                    <div style="display: flex;align-items: center;margin-top: -10px;margin-left: 0px;">
                        <div style="margin-top: -6px;">
                            <span class="menu-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
                                    <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
                                    <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
                                    <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                        <div style="margin-left: 5px;">
                            <h1 class="page-heading d-flex flex-column text-dark fw-bolder fs-1 lh-0"><?= $gusr ?> - <?= $gyear ?></h1>
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
                            <a class="nav-link ms-0 me-10 py-5 active" href="#">Form Monthly Expenses Detail</a>
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
                                        <h6 class="fw-bold m-0">Create Monthly Expenses Detail</h6>
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
                        <div class="card-body p-lg-12" style="margin-bottom: -65px;">
                            <!--begin::Layout-->
                            <div class="d-flex flex-column flex-lg-row mb-0">
                                <!--begin::Content-->
                                <div class="flex-lg-row-fluid">
                                    <!--begin::Form-->
                                    <form action="pages/dashboard/action/action.php" class="form mb-15" method="POST" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                            <span>Account Name</span>
                                                        </label>
                                                        <?php
                                                        $sub_usr = 'on line';
                                                        if (strpos($gusr, $sub_usr) !== false) {
                                                            $validaton_usr = 'is-invalid';
                                                        } else {
                                                            $validaton_usr = 'is-valid';
                                                        }
                                                        ?>
                                                        <input type="hidden" class="form-control" name="account_id" value="<?= $gusrid; ?>" readonly>
                                                        <input type="text" class="form-control form-control-solid <?= $validaton_usr ?>" name="account_name" value="<?= $gusr; ?>" readonly>
                                                        <input type="hidden" class="form-control" name="category_id" value="<?= $gid; ?>">
                                                        <input type="hidden" class="form-control" name="modul" value="<?= $_GET['m']; ?>">
                                                        <input type="hidden" class="form-control" name="page" value="<?= $_GET['s']; ?>">
                                                        <input type="hidden" class="form-control" name="accmonth" value="<?= $gmonth; ?>" readonly>
                                                        <input type="hidden" class="form-control" name="accyears" value="<?= $gyear; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                            <span class="required">Transaction Name</span>
                                                        </label>
                                                        <?php
                                                        $sub_name = 'on line';
                                                        if (strpos($gname, $sub_name) !== false) {
                                                            $validaton_name = 'is-invalid';
                                                        } else {
                                                            $validaton_name = 'is-valid';
                                                        }
                                                        ?>
                                                        <input type="text" class="form-control form-control-solid <?= $validaton_name ?>" name="transaction_name" value="<?= $gname ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                            <span class="required">Transaction Date</span>
                                                        </label>
                                                        <input type="datetime-local" class="form-control" name="transaction_at" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                            <span class="required">Amount</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="amount" id="rupiah" placeholder="Rp." required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                        <span class="required">Transaction Method</span>
                                                    </label>
                                                    <select name="transaction_method" data-control="select2" data-placeholder="Choose Transaction Method..." class="form-select" required>
                                                        <option value=""></option>
                                                        <?php $qaccount = $db->query("SELECT * FROM method ORDER BY method_name ASC"); ?>
                                                        <?php foreach ($qaccount as $row) : ?>
                                                            <option value="<?= $row['method_name']; ?>">ID<?= $row['method_id']; ?> - <?= $row['method_name']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                            <span class="required">Upload File</span>
                                                        </label>
                                                        <input type="file" class="form-control" name="thumbnail" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                            <span>Description/Note</span>
                                                        </label>
                                                        <textarea class="form-control" name="description" placeholder="Description/Note ..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="separator mb-5"></div>
                                        <button type="submit" name="add_expenses_detail_" class="btn btn-md btn-secondary">
                                            Save
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!--end::Layout-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e) {
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>