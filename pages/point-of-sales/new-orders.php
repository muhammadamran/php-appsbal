<title>New Orders - Orders - Point of Sales | <?= $app_name; ?> &copy Official </title>
<div class="d-flex flex-column flex-column-fluid">
    <!-- Begin Page Header -->
    <div id="kt_app_toolbar" class="app-toolbar pt-5">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column gap-1 me-3 mb-2">
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Orders</li>
                        &nbsp;<i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">New Orders</li>
                    </ul>
                    <div style="display: flex;align-items: center;margin-top: -10px;margin-left: 0px;">
                        <div style="margin-top: -6px;">
                            <span class="menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="currentColor" />
                                    <path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="currentColor" />
                                    <path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                        <div style="margin-left: 5px;">
                            <h1 class="page-heading d-flex flex-column text-dark fw-bolder fs-1 lh-0">New Orders</h1>
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
                            New Clients
                        </a>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th>#</th>
                                    <th class="min-w-20px">No.Refernce</th>
                                    <th class="min-w-20px">Order<font style="color:transparent">.</font>Type</th>
                                    <th class="min-w-20px">Customer</th>
                                    <th class="min-w-20px">Service</th>
                                    <th class="min-w-20px">Level</th>
                                    <th class="min-w-10px" style="text-align: center;">
                                        <font style="color:transparent">....</font>Status
                                    </th>
                                    <th class="text-end min-w-150px datatable-nosort">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <?php $dataquery = $db->query("SELECT * FROM clients WHERE is_deleted='false' ORDER BY client_id DESC"); ?>
                                <?php
                                if (mysqli_num_rows($dataquery) > 0) {
                                    $no = 0;
                                    while ($row = mysqli_fetch_array($dataquery)) {
                                        $no++;
                                ?>
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="8">
                                            <center>
                                                <div style="display: grid;">
                                                    <div>
                                                        <img src="assets/svg/no-data.svg" alt="No Data" style="width:30%">
                                                    </div>
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