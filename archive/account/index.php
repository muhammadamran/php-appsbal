<title>Manage Account | <?= $app_name; ?> &copy Official </title>
<?php
include "pages/account/modal/create.php"
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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1 active">Manage Account</li>
                    </ul>
                    <div style="display: flex;align-items: center;margin-top: -10px;margin-left: 0px;">
                        <div style="margin-top: -6px;">
                            <span class="menu-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor" />
                                    <path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="currentColor" />
                                    <path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                        <div style="margin-left: 5px;">
                            <h1 class="page-heading d-flex flex-column text-dark fw-bolder fs-1 lh-0">Manage Account</h1>
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
                            New Account
                        </a>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="tabledid">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th>#</th>
                                    <th class="min-w-20px">ID</th>
                                    <th class="min-w-20px">Email</th>
                                    <!-- <th class="min-w-20px">Password</th> -->
                                    <th class="min-w-175px">Name</th>
                                    <th class="min-w-20px">Gender</th>
                                    <!-- <th class="min-w-20px">Birth</th>
                                    <th class="min-w-20px">Age</th>
                                    <th class="min-w-20px">Blood</th>
                                    <th class="min-w-20px">Religion</th> -->
                                    <th class="min-w-175px">Status</th>
                                    <th class="min-w-175px">Role</th>
                                    <th class="min-w-175px">Deleted Date</th>
                                    <th class="min-w-175px">Created Date</th>
                                    <th class="min-w-175px">Updated Date</th>
                                    <th class="text-end min-w-150px datatable-nosort">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <?php $dataquery = $db->query("SELECT * FROM accounts WHERE is_deleted='false' ORDER BY account_id DESC"); ?>
                                <?php
                                if (mysqli_num_rows($dataquery) > 0) {
                                    $no = 0;
                                    while ($row = mysqli_fetch_array($dataquery)) {
                                        $no++;
                                ?>
                                        <tr>
                                            <td><?= $no ?>.</td>
                                            <td>ID<?= $row['account_id'] ?></td>
                                            <td><a href="#" class="text-gray-800 text-hover-dark mb-1"><?= $row['email'] ?></a></td>
                                            <!-- <td><a href="#" class="text-gray-800 text-hover-dark mb-1">***</a></td> -->
                                            <td><a href="#" class="text-gray-800 text-hover-dark mb-1"><?= $row['name'] ?></a></td>
                                            <td><a href="#" class="text-gray-800 text-hover-dark mb-1"><?= $row['gender'] ?></a></td>
                                            <!-- <td><a href="#" class="text-gray-800 text-hover-dark mb-1"><?= $row['birth'] ?></a></td>
                                            <td><a href="#" class="text-gray-800 text-hover-dark mb-1"><?= $row['age'] ?></a></td>
                                            <td><a href="#" class="text-gray-800 text-hover-dark mb-1"><?= $row['blood'] ?></a></td>
                                            <td><a href="#" class="text-gray-800 text-hover-dark mb-1"><?= $row['religion'] ?></a></td> -->
                                            <td style="text-align: center;"><?= !empty($row['is_deleted']) && $row['is_deleted'] == 'true' ? '<span class="badge badge-light-danger fs-base" style="font-size: 12px !important;">Non Active</span>' : '<span class="badge badge-light-success fs-base" style="font-size: 12px !important;">Active</span>' ?></td>
                                            <td><a href="#" class="text-gray-800 text-hover-dark mb-1"><?= $row['role'] ?></a></td>
                                            <td style="font-size: 13.5px;"><?= $row['deleted_at'] == '0000-00-00 00:00:00' || $row['deleted_at'] == NULL ? '-' : '' . func_date_($row['deleted_at'], TRUE) ?></td>
                                            <td style="font-size: 13.5px;"><?= $row['created_at'] == '0000-00-00 00:00:00' || $row['created_at'] == NULL ? '-' : '' . func_date_($row['created_at'], TRUE) ?></td>
                                            <td style="font-size: 13.5px;"><?= $row['updated_at'] == '0000-00-00 00:00:00' || $row['updated_at'] == NULL ? '-' : '' . func_date_($row['updated_at'], TRUE) ?></td>
                                            <td class="text-end">
                                                <div class="d-flex justify-content-center flex-shrink-0">
                                                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to change password">
                                                        <a href="#" class="btn btn-icon btn-active-light-primary me-2 mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_change_password<?= $row['account_id']; ?>">
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M15.8054 11.639C15.6757 11.5093 15.5184 11.4445 15.3331 11.4445H15.111V10.1111C15.111 9.25927 14.8055 8.52784 14.1944 7.91672C13.5833 7.30557 12.8519 7 12 7C11.148 7 10.4165 7.30557 9.80547 7.9167C9.19432 8.52784 8.88885 9.25924 8.88885 10.1111V11.4445H8.66665C8.48153 11.4445 8.32408 11.5093 8.19444 11.639C8.0648 11.7685 8 11.926 8 12.1112V16.1113C8 16.2964 8.06482 16.4539 8.19444 16.5835C8.32408 16.7131 8.48153 16.7779 8.66665 16.7779H15.3333C15.5185 16.7779 15.6759 16.7131 15.8056 16.5835C15.9351 16.4539 16 16.2964 16 16.1113V12.1112C16.0001 11.926 15.9351 11.7686 15.8054 11.639ZM13.7777 11.4445H10.2222V10.1111C10.2222 9.6204 10.3958 9.20138 10.7431 8.85421C11.0903 8.507 11.5093 8.33343 12 8.33343C12.4909 8.33343 12.9097 8.50697 13.257 8.85421C13.6041 9.20135 13.7777 9.6204 13.7777 10.1111V11.4445Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to update record">
                                                        <a href="#" class="btn btn-icon btn-active-light-primary me-2 mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_update<?= $row['account_id']; ?>">
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to delete record">
                                                        <a href="#" class="btn btn-icon btn-active-light-danger me-2 mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_delete<?= $row['account_id']; ?>">
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

                                        <!-- Modal Change Password -->
                                        <div class="modal fade" id="kt_modal_change_password<?= $row['account_id']; ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <form action="pages/account/action/action.php" method="POST">
                                                        <div class="modal-header" style="margin-top: -7px;">
                                                            <h2>
                                                                <div style="display: flex;justify-content:start;align-items: center;">
                                                                    <div>
                                                                        <a href="#" class="btn btn-icon btn-light-primary">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                                    <path d="M15.8054 11.639C15.6757 11.5093 15.5184 11.4445 15.3331 11.4445H15.111V10.1111C15.111 9.25927 14.8055 8.52784 14.1944 7.91672C13.5833 7.30557 12.8519 7 12 7C11.148 7 10.4165 7.30557 9.80547 7.9167C9.19432 8.52784 8.88885 9.25924 8.88885 10.1111V11.4445H8.66665C8.48153 11.4445 8.32408 11.5093 8.19444 11.639C8.0648 11.7685 8 11.926 8 12.1112V16.1113C8 16.2964 8.06482 16.4539 8.19444 16.5835C8.32408 16.7131 8.48153 16.7779 8.66665 16.7779H15.3333C15.5185 16.7779 15.6759 16.7131 15.8056 16.5835C15.9351 16.4539 16 16.2964 16 16.1113V12.1112C16.0001 11.926 15.9351 11.7686 15.8054 11.639ZM13.7777 11.4445H10.2222V10.1111C10.2222 9.6204 10.3958 9.20138 10.7431 8.85421C11.0903 8.507 11.5093 8.33343 12 8.33343C12.4909 8.33343 12.9097 8.50697 13.257 8.85421C13.6041 9.20135 13.7777 9.6204 13.7777 10.1111V11.4445Z" fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div style="margin-left: 5px;">
                                                                        <div>
                                                                            <div>
                                                                                Change Password
                                                                            </div>
                                                                            <div style="font-size: 10px;color: #707380;font-weight: 400;font-style: normal;">
                                                                                Action change password for account <?= $row['name']; ?>
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
                                                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span>New Password</span>
                                                                            </label>
                                                                            <input type="password" class="form-control form-control-solid" name="password" placeholder="New Password ..." required>
                                                                            <input type="hidden" class="form-control form-control-solid" name="account_id" value="<?= $row['account_id']; ?>">
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
                                                            <button type="submit" name="changepassword_" class="btn btn-md btn-primary">
                                                                Save Changes
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal Change Password -->
                                        <!-- Modal Update -->
                                        <div class="modal fade" id="kt_modal_update<?= $row['account_id']; ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered mw-900px">
                                                <div class="modal-content">
                                                    <form action="pages/account/action/action.php" method="POST">
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
                                                                                Action update record for account <?= $row['name']; ?>
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
                                                                                <span>Email</span>
                                                                            </label>
                                                                            <input type="email" class="form-control form-control-solid" name="email" placeholder="Email ..." value="<?= $row['email']; ?>" readonly>
                                                                            <input type="hidden" class="form-control form-control-solid" name="account_id" value="<?= $row['account_id']; ?>">
                                                                            <input type="hidden" class="form-control form-control-solid" name="modul" value="<?= $_GET['m']; ?>">
                                                                            <input type="hidden" class="form-control form-control-solid" name="page" value="<?= $_GET['s']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span>Role</span>
                                                                            </label>
                                                                            <select name="role" class="form-control form-control-solid">
                                                                                <option value="<?= $row['role']; ?>"><?= $row['role']; ?></option>
                                                                                <option value="">Select Role</option>
                                                                                <option value="Administrator">Administrator</option>
                                                                                <option value="User">User</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span>Name</span>
                                                                            </label>
                                                                            <input type="text" class="form-control form-control-solid" name="name" placeholder="Name ..." value="<?= $row['name']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span>Gender</span>
                                                                            </label>
                                                                            <select name="gender" class="form-control form-control-solid">
                                                                                <option value="<?= $row['gender'] == '' ? '' : '', $row['gender'] ?>"><?= $row['gender'] == '' ? 'Select Gender' : '', $row['gender'] ?></option>
                                                                                <option value="Pria">Pria</option>
                                                                                <option value="Wanita">Wanita</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span>Date of Birth</span>
                                                                            </label>
                                                                            <input type="date" class="form-control form-control-solid" name="birth" placeholder="Date of Birth ..." value="<?= $row['birth']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span>Age</span>
                                                                            </label>
                                                                            <input type="number" class="form-control form-control-solid" name="age" placeholder="Age ..." value="<?= $row['age']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span>Blood</span>
                                                                            </label>
                                                                            <select name="blood" class="form-control form-control-solid">
                                                                                <option value="<?= $row['blood'] == '' ? '' : '', $row['blood'] ?>"><?= $row['blood'] == '' ? 'Select Blood' : '', $row['blood'] ?></option>
                                                                                <option value="O">O</option>
                                                                                <option value="A">A</option>
                                                                                <option value="B">B</option>
                                                                                <option value="AB">AB</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                                <span>Religion</span>
                                                                            </label>
                                                                            <select name="religion" class="form-control form-control-solid">
                                                                                <option value="<?= $row['religion'] == '' ? '' : '', $row['religion'] ?>"><?= $row['religion'] == '' ? 'Select Religion' : '', $row['religion'] ?></option>
                                                                                <option value="Islam">Islam</option>
                                                                                <option value="Protestan">Protestan</option>
                                                                                <option value="Katolik">Katolik</option>
                                                                                <option value="Hindu">Hindu</option>
                                                                                <option value="Buddha">Buddha</option>
                                                                                <option value="Khonghucu">Khonghucu</option>
                                                                            </select>
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
                                        <div class="modal fade" id="kt_modal_delete<?= $row['account_id']; ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <form action="pages/account/action/action.php" method="POST">
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
                                                                                <input type="hidden" class="form-control form-control-solid" name="account_id" value="<?= $row['account_id']; ?>">
                                                                                <input type="hidden" class="form-control form-control-solid" name="modul" value="<?= $_GET['m']; ?>">
                                                                                <input type="hidden" class="form-control form-control-solid" name="page" value="<?= $_GET['s']; ?>">
                                                                                Action delete record for account <?= $row['name']; ?>
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