<title>Data Bank | <?= $app_name; ?> &copy Official </title>
<?php
include "pages/bank/modal/create.php"
?>
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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1 active">Data Bank</li>
                    </ul>
                    <div style="display: flex;align-items: center;margin-top: -10px;margin-left: 0px;">
                        <div style="margin-top: -6px;">
                            <span class="menu-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor" />
                                    <path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                        <div style="margin-left: 5px;">
                            <h1 class="page-heading d-flex flex-column text-dark fw-bolder fs-1 lh-0">Data Bank</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card">
                <div class="button-card">
                    <div class="for-export">
                        <div class="for-export-2">
                            <font class="font-export">Export File:&nbsp;</font>
                            <a href="#" class="btn btn-outline btn-outline-dashed btn-outline-secondary card-toolbar font-export" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to download Excel file">Excel</a>
                            <a href="#" class="btn btn-outline btn-outline-dashed btn-outline-secondary card-toolbar font-export" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to download PDF file">PDF</a>
                        </div>
                    </div>
                    <div class="for-add">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            New Bank
                        </a>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="tabledid-bank">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th>#</th>
                                    <th class="min-w-20px">ID</th>
                                    <th class="min-w-40px datatable-nosort" style="text-align: center;">
                                        IMG<font style="color:transparent">....</font>
                                    </th>
                                    <th class="min-w-200px">Bank Name</th>
                                    <th class="min-w-20px">Bank<font style="color:transparent">.</font>Code</th>
                                    <th class="min-w-275px">Bank Contact</th>
                                    <th class="min-w-20px datatable-nosort" style="text-align: center;">
                                        Bank<font style="color:transparent">.</font>Link<font style="color:transparent">....</font>
                                    </th>
                                    <th class="text-end min-w-150px datatable-nosort">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <?php $dataquery = $db->query("SELECT * FROM bank ORDER BY group_id,bank_id ASC"); ?>
                                <?php
                                if (mysqli_num_rows($dataquery) > 0) {
                                    $no = 0;
                                    while ($row = mysqli_fetch_array($dataquery)) {
                                        $no++;
                                ?>
                                        <tr>
                                            <td><?= $no ?>.</td>
                                            <td>ID<?= $row['bank_id'] ?></td>
                                            <td style="text-align: center;">
                                                <div>
                                                    <a class="d-block overlay symbol symbol-50px" data-fslightbox="lightbox-hot-sales" href="assets/my-content/bank/<?= $row['image'] ?>">
                                                        <span class="symbol-label" style="background-image:url(assets/my-content/bank/<?= $row['image'] ?>);"></span>
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="ki-duotone ki-eye fs-2x text-white">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="text-gray-800 text-hover-dark mb-1"><?= $row['bank_name'] ?></a>
                                            </td>
                                            <td>
                                                <?= $row['bank_code'] ?>
                                            </td>
                                            <td>
                                                <?= $row['contact_title'] ?>: <a href="tel:<?= $row['contact_label'] ?>" class="text-gray-800 text-hover-dark mb-1"><i class="fa fa-phone"></i> <?= $row['contact_label'] ?></a>
                                            </td>
                                            <td style="text-align: center;">
                                                <a href="<?= $row['bank_link'] ?>" target="_blank" class="text-gray-800 text-hover-dark mb-1"><i class="fa fa-globe"></i></a>
                                            </td>
                                            <td class="text-end">
                                                <div class="d-flex justify-content-center flex-shrink-0">
                                                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to change image">
                                                        <a href="#" class="btn btn-icon btn-active-light-primary me-2 mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_images<?= $row['bank_id']; ?>">
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="currentColor" />
                                                                    <path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to update record">
                                                        <a href="#" class="btn btn-icon btn-active-light-primary me-2 mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_update<?= $row['bank_id']; ?>">
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to delete record">
                                                        <a href="#" class="btn btn-icon btn-active-light-danger me-2 mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_delete<?= $row['bank_id']; ?>">
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Modal Images -->
                                        <div class="modal fade" id="kt_modal_images<?= $row['bank_id']; ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <form action="pages/bank/action/action.php" name="foo" method="POST" enctype="multipart/form-data">
                                                        <div class="modal-header" style="margin-top: -7px;">
                                                            <h2>
                                                                <div style="display: flex;justify-content:start;align-items: center;">
                                                                    <div>
                                                                        <a href="#" class="btn btn-icon btn-light-primary">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                                                    <path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="currentColor" />
                                                                                    <path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div style="margin-left: 5px;">
                                                                        <div>
                                                                            <div>
                                                                                Change Image
                                                                            </div>
                                                                            <div style="font-size: 10px;color: #707380;font-weight: 400;font-style: normal;">
                                                                                Action change image for bank <?= $row['bank_name']; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </h2>
                                                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <center>
                                                                            <!-- Begin Images -->
                                                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/files/blank-image.svg')">
                                                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/my-content/bank/<?= $row['image'] ?>);background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                                                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                                                    <i class="ki-duotone ki-pencil fs-7">
                                                                                        <span class="path1"></span>
                                                                                        <span class="path2"></span>
                                                                                    </i>
                                                                                    <input type="file" name="image" accept=".png, .jpg, .jpeg, .svg, .gif" />
                                                                                    <input type="hidden" name="avatar_remove" />
                                                                                </label>
                                                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                                                    <i class="ki-duotone ki-cross fs-2">
                                                                                        <span class="path1"></span>
                                                                                        <span class="path2"></span>
                                                                                    </i>
                                                                                </span>
                                                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                                                    <i class="ki-duotone ki-cross fs-2">
                                                                                        <span class="path1"></span>
                                                                                        <span class="path2"></span>
                                                                                    </i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="form-text" style="margin-top: 25px;margin-bottom: -30px;">Attention: Allowed file types: png, jpg, jpeg, svg, gif.</div>
                                                                            <!-- End Images -->
                                                                        </center>
                                                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                            <input type="hidden" class="form-control form-control-solid" name="bank_id" value="<?= $row['bank_id']; ?>">
                                                                            <input type="hidden" class="form-control form-control-solid" name="modul" value="<?= $_GET['m']; ?>">
                                                                            <input type="hidden" class="form-control form-control-solid" name="page" value="<?= $_GET['s']; ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-md btn-light-primary" data-bs-dismiss="modal">
                                                                Discard
                                                            </button>
                                                            <button type="submit" name="images_" class="btn btn-md btn-primary">
                                                                Save Changes
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal Images -->
                                        <!-- Modal Update -->
                                        <div class="modal fade" id="kt_modal_update<?= $row['bank_id']; ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered mw-900px">
                                                <div class="modal-content">
                                                    <form action="pages/bank/action/action.php" method="POST">
                                                        <div class="modal-header" style="margin-top: -7px;">
                                                            <h2>
                                                                <div style="display: flex;justify-content:start;align-items: center;">
                                                                    <div>
                                                                        <a href="#" class="btn btn-icon btn-light-primary">
                                                                            <span class="svg-icon svg-icon-3 svg-icon-warning">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div style="margin-left: 5px;">
                                                                        <div>
                                                                            <div>
                                                                                Update Record
                                                                            </div>
                                                                            <div style="font-size: 10px;color: #707380;font-weight: 400;font-style: normal;">
                                                                                Action update record for bank <?= $row['bank_name']; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </h2>
                                                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span>Bank Name</span>
                                                                            </label>
                                                                            <input type="text" class="form-control form-control-solid" name="bank_name" placeholder="Bank Name ..." value="<?= $row['bank_name']; ?>">
                                                                            <input type="hidden" class="form-control form-control-solid" name="bank_id" value="<?= $row['bank_id']; ?>">
                                                                            <input type="hidden" class="form-control form-control-solid" name="modul" value="<?= $_GET['m']; ?>">
                                                                            <input type="hidden" class="form-control form-control-solid" name="page" value="<?= $_GET['s']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span>Bank Code</span>
                                                                            </label>
                                                                            <input type="number" class="form-control form-control-solid" name="bank_code" placeholder="Bank Code ..." value="<?= $row['bank_code']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span>Call Center</span>
                                                                            </label>
                                                                            <input type="number" class="form-control form-control-solid" name="contact_label" placeholder="Call Center ..." value="<?= $row['contact_label']; ?>">
                                                                            <input type="hidden" class="form-control form-control-solid" name="contact_title" value="Call Center">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span>Bank Link</span>
                                                                            </label>
                                                                            <input type="text" class="form-control form-control-solid" name="bank_link" placeholder="Bank Link ..." value="<?= $row['bank_link']; ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-md btn-light-primary" data-bs-dismiss="modal">
                                                                Discard
                                                            </button>
                                                            <button type="submit" name="update_" class="btn btn-md btn-primary">
                                                                Save Changes
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal Update -->
                                        <!-- Modal Delete -->
                                        <div class="modal fade" id="kt_modal_delete<?= $row['bank_id']; ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <form action="pages/bank/action/action.php" method="POST">
                                                        <div class="modal-header" style="margin-top: -7px;">
                                                            <h2>
                                                                <div style="display: flex;justify-content:start;align-items: center;">
                                                                    <div>
                                                                        <a href="#" class="btn btn-icon btn-light-danger">
                                                                            <span class="svg-icon svg-icon-3 svg-icon-danger">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div style="margin-left: 5px;">
                                                                        <div>
                                                                            <div>
                                                                                Delete Record
                                                                            </div>
                                                                            <div style="font-size: 10px;color: #707380;font-weight: 400;font-style: normal;">
                                                                                <input type="hidden" class="form-control form-control-solid" name="bank_id" value="<?= $row['bank_id']; ?>">
                                                                                <input type="hidden" class="form-control form-control-solid" name="modul" value="<?= $_GET['m']; ?>">
                                                                                <input type="hidden" class="form-control form-control-solid" name="page" value="<?= $_GET['s']; ?>">
                                                                                Action delete record for bank <?= $row['bank_name']; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </h2>
                                                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div style="display: grid;justify-content: center;align-items: center;">
                                                                            <div style="display: flex;justify-content: center;align-items: center;">
                                                                                <!-- Icon -->
                                                                                <div class="circle-warning">
                                                                                    <div style="display: flex;justify-content: center;align-items: center;margin-top: 13px;">
                                                                                        <i class="fa fa-warning" style="font-size: 30px;color:#f1416c"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div style="display: flex;justify-content: center;margin-top: 5px;margin-bottom: 5px;">
                                                                                <!-- Warning -->
                                                                                <font style="font-size: 20px;font-weight: 800;">Are you sure?</font>
                                                                            </div>
                                                                            <div style="display: flex;justify-content: center;text-align: center;">
                                                                                <!-- Statement -->
                                                                                <font style="color: #6a6a6a;font-size: 16px;">This action cannot be undone. All values<br>associated with this field will be lost.</font>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-md btn-light-danger" data-bs-dismiss="modal">
                                                                No, cencel
                                                            </button>
                                                            <button type="submit" name="delete_" class="btn btn-md btn-danger">
                                                                Yes, delete it
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal Delete -->
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="11">
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
</div>