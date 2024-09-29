<title>Settings | <?= $app_name; ?> &copy Official </title>
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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1 active">Settings</li>
                    </ul>
                    <div style="display: flex;align-items: center;margin-top: -10px;margin-left: 0px;">
                        <div style="margin-top: -6px;">
                            <span class="menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path opacity="0.3"
                                        d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
                                        fill="black"></path>
                                    <path
                                        d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                        </div>
                        <div style="margin-left: 5px;">
                            <h1 class="page-heading d-flex flex-column text-dark fw-bolder fs-1 lh-0">Settings</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row g-5 mb-5 mb-lg-15">
                <!-- Images -->
                <div class="separator separator-dashed" style="margin-top: 10px;margin-bottom: 15px;"></div>
                <div class="col-12">
                    <div class="d-flex flex-stack" style="margin-top: -25px;">
                        <h3 class="text-dark">Images Application</h3>
                    </div>
                </div>
                <div class="separator separator-dashed" style="margin-top: 1px;margin-bottom: 8px;"></div>
                <div class="col-md-3">
                    <div class="card-xl-stretch me-md-6">
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                            href="<?= $icon_img == NULL ? 'assets/media/svg/files/blank-image.svg' : 'assets/my-content/icon/' . $icon_img  ?>">
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                style="background-image:url('<?= $icon_img == NULL ? 'assets/media/svg/files/blank-image.svg' : 'assets/my-content/icon/' . $icon_img ?>')">
                            </div>
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-duotone ki-eye fs-2x text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                        </a>
                        <div class="mt-5">
                            <div style="display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <a href="#" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">
                                        Icon Image
                                    </a>
                                </div>
                                <div>
                                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-trigger="hover" title="Click to change image Icon">
                                        <a href="#"
                                            class="btn btn-icon btn-sm btn-outline btn-outline-dashed btn-outline-dark btn-active-light-dark"
                                            data-bs-toggle="modal" data-bs-target="#modal_icon<?= $app_id; ?>">
                                            <span class="svg-icon svg-icon-muted svg-icon-2"><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z"
                                                        fill="currentColor" />
                                                    <path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- Modal Images Icon -->
                                    <div class="modal fade" id="modal_icon<?= $app_id; ?>" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form action="pages/settings/action/action.php" method="POST"
                                                    enctype="multipart/form-data">
                                                    <div class="modal-header" style="margin-top: 0px;">
                                                        <h2>
                                                            <div
                                                                style="display: flex;justify-content:start;align-items: center;">
                                                                <div>
                                                                    <a href="#" class="btn btn-icon btn-light-primary">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="currentColor">
                                                                                <path opacity="0.3"
                                                                                    d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
                                                                                    fill="currentColor" />
                                                                                <path
                                                                                    d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div style="margin-left: 5px;">
                                                                    <div>
                                                                        <div>
                                                                            Change Image
                                                                        </div>
                                                                        <div
                                                                            style="font-size: 10px;color: #707380;font-weight: 400;font-style: normal;">
                                                                            Action change image for icon
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </h2>
                                                        <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                            data-bs-dismiss="modal">
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)" fill="black">
                                                                    </rect>
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)" fill="black">
                                                                    </rect>
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
                                                                        <div class="image-input image-input-outline"
                                                                            data-kt-image-input="true"
                                                                            style="background-image: url('assets/media/svg/files/blank-image.svg')">
                                                                            <div class="image-input-wrapper w-125px h-125px"
                                                                                style="background-image: url(<?= $icon_img == NULL ? 'assets/media/svg/files/blank-image.svg' : 'assets/my-content/icon/' . $icon_img ?>);background-position: center;background-repeat: no-repeat;background-size: cover;">
                                                                            </div>
                                                                            <label
                                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                data-kt-image-input-action="change"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Change avatar">
                                                                                <i class="ki-duotone ki-pencil fs-7">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                                <input type="file" name="image"
                                                                                    accept=".png, .jpg, .jpeg, .svg, .gif" />
                                                                                <input type="hidden"
                                                                                    name="avatar_remove" />
                                                                            </label>
                                                                            <span
                                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                data-kt-image-input-action="cancel"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Cancel avatar">
                                                                                <i class="ki-duotone ki-cross fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </span>
                                                                            <span
                                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                data-kt-image-input-action="remove"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Remove avatar">
                                                                                <i class="ki-duotone ki-cross fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="form-text"
                                                                            style="margin-top: 25px;margin-bottom: -30px;">
                                                                            Attention: Allowed file types: png, jpg,
                                                                            jpeg, svg, gif.</div>
                                                                        <!-- End Images -->
                                                                    </center>
                                                                    <div
                                                                        class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                        <input type="hidden"
                                                                            class="form-control form-control-solid"
                                                                            name="app_id" value="<?= $app_id; ?>">
                                                                        <input type="hidden"
                                                                            class="form-control form-control-solid"
                                                                            name="modul" value="<?= $_GET['m']; ?>">
                                                                        <input type="hidden"
                                                                            class="form-control form-control-solid"
                                                                            name="page" value="<?= $_GET['s']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-md btn-light-primary"
                                                            data-bs-dismiss="modal">
                                                            Discard
                                                        </button>
                                                        <button type="submit" name="icon_"
                                                            class="btn btn-md btn-primary">
                                                            Save Changes
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Images Icon -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-xl-stretch me-md-6">
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                            href="<?= $logo_img == NULL ? 'assets/media/svg/files/blank-image.svg' : 'assets/my-content/logo/' . $logo_img ?>">
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                style="background-image:url('<?= $logo_img == NULL ? 'assets/media/svg/files/blank-image.svg' : 'assets/my-content/logo/' . $logo_img ?>')">
                            </div>
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-duotone ki-eye fs-2x text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                        </a>
                        <div class="mt-5">
                            <div style="display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <a href="#" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">
                                        Logo Image
                                    </a>
                                </div>
                                <div>
                                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-trigger="hover" title="Click to change image Logo">
                                        <a href="#"
                                            class="btn btn-icon btn-sm btn-outline btn-outline-dashed btn-outline-dark btn-active-light-dark"
                                            data-bs-toggle="modal" data-bs-target="#modal_logo<?= $app_id; ?>">
                                            <span class="svg-icon svg-icon-muted svg-icon-2"><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z"
                                                        fill="currentColor" />
                                                    <path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- Modal Images Logo -->
                                    <div class="modal fade" id="modal_logo<?= $app_id; ?>" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form action="pages/settings/action/action.php" method="POST"
                                                    enctype="multipart/form-data">
                                                    <div class="modal-header" style="margin-top: 0px;">
                                                        <h2>
                                                            <div
                                                                style="display: flex;justify-content:start;align-items: center;">
                                                                <div>
                                                                    <a href="#" class="btn btn-icon btn-light-primary">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="currentColor">
                                                                                <path opacity="0.3"
                                                                                    d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
                                                                                    fill="currentColor" />
                                                                                <path
                                                                                    d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div style="margin-left: 5px;">
                                                                    <div>
                                                                        <div>
                                                                            Change Image
                                                                        </div>
                                                                        <div
                                                                            style="font-size: 10px;color: #707380;font-weight: 400;font-style: normal;">
                                                                            Action change image for logo
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </h2>
                                                        <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                            data-bs-dismiss="modal">
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)" fill="black">
                                                                    </rect>
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)" fill="black">
                                                                    </rect>
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
                                                                        <div class="image-input image-input-outline"
                                                                            data-kt-image-input="true"
                                                                            style="background-image: url('assets/media/svg/files/blank-image.svg')">
                                                                            <div class="image-input-wrapper w-125px h-125px"
                                                                                style="background-image: url(<?= $logo_img == NULL ? 'assets/media/svg/files/blank-image.svg' : 'assets/my-content/logo/' . $logo_img ?>);background-position: center;background-repeat: no-repeat;background-size: cover;">
                                                                            </div>
                                                                            <label
                                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                data-kt-image-input-action="change"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Change avatar">
                                                                                <i class="ki-duotone ki-pencil fs-7">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                                <input type="file" name="image"
                                                                                    accept=".png, .jpg, .jpeg, .svg, .gif" />
                                                                                <input type="hidden"
                                                                                    name="avatar_remove" />
                                                                            </label>
                                                                            <span
                                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                data-kt-image-input-action="cancel"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Cancel avatar">
                                                                                <i class="ki-duotone ki-cross fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </span>
                                                                            <span
                                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                data-kt-image-input-action="remove"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Remove avatar">
                                                                                <i class="ki-duotone ki-cross fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="form-text"
                                                                            style="margin-top: 25px;margin-bottom: -30px;">
                                                                            Attention: Allowed file types: png, jpg,
                                                                            jpeg, svg, gif.</div>
                                                                        <!-- End Images -->
                                                                    </center>
                                                                    <div
                                                                        class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                        <input type="hidden"
                                                                            class="form-control form-control-solid"
                                                                            name="app_id" value="<?= $app_id; ?>">
                                                                        <input type="hidden"
                                                                            class="form-control form-control-solid"
                                                                            name="modul" value="<?= $_GET['m']; ?>">
                                                                        <input type="hidden"
                                                                            class="form-control form-control-solid"
                                                                            name="page" value="<?= $_GET['s']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-md btn-light-primary"
                                                            data-bs-dismiss="modal">
                                                            Discard
                                                        </button>
                                                        <button type="submit" name="logo_"
                                                            class="btn btn-md btn-primary">
                                                            Save Changes
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Images Logo -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-xl-stretch me-md-6">
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                            href="<?= $loader_img == NULL ? 'assets/media/svg/files/blank-image.svg' : 'assets/my-content/loader/' . $loader_img ?>">
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                style="background-image:url('<?= $loader_img == NULL ? 'assets/media/svg/files/blank-image.svg' : 'assets/my-content/loader/' . $loader_img ?>')">
                            </div>
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-duotone ki-eye fs-2x text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                        </a>
                        <div class="mt-5">
                            <div style="display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <a href="#" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">
                                        Loader Image
                                    </a>
                                </div>
                                <div>
                                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-trigger="hover" title="Click to change image Loader">
                                        <a href="#"
                                            class="btn btn-icon btn-sm btn-outline btn-outline-dashed btn-outline-dark btn-active-light-dark"
                                            data-bs-toggle="modal" data-bs-target="#modal_loader<?= $app_id; ?>">
                                            <span class="svg-icon svg-icon-muted svg-icon-2"><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z"
                                                        fill="currentColor" />
                                                    <path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- Modal Images Loader -->
                                    <div class="modal fade" id="modal_loader<?= $app_id; ?>" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form action="pages/settings/action/action.php" method="POST"
                                                    enctype="multipart/form-data">
                                                    <div class="modal-header" style="margin-top: 0px;">
                                                        <h2>
                                                            <div
                                                                style="display: flex;justify-content:start;align-items: center;">
                                                                <div>
                                                                    <a href="#" class="btn btn-icon btn-light-primary">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="currentColor">
                                                                                <path opacity="0.3"
                                                                                    d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
                                                                                    fill="currentColor" />
                                                                                <path
                                                                                    d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div style="margin-left: 5px;">
                                                                    <div>
                                                                        <div>
                                                                            Change Image
                                                                        </div>
                                                                        <div
                                                                            style="font-size: 10px;color: #707380;font-weight: 400;font-style: normal;">
                                                                            Action change image for loader
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </h2>
                                                        <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                            data-bs-dismiss="modal">
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)" fill="black">
                                                                    </rect>
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)" fill="black">
                                                                    </rect>
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
                                                                        <div class="image-input image-input-outline"
                                                                            data-kt-image-input="true"
                                                                            style="background-image: url('assets/media/svg/files/blank-image.svg')">
                                                                            <div class="image-input-wrapper w-125px h-125px"
                                                                                style="background-image: url(<?= $loader_img == NULL ? 'assets/media/svg/files/blank-image.svg' : 'assets/my-content/loader/' . $loader_img ?>);background-position: center;background-repeat: no-repeat;background-size: cover;">
                                                                            </div>
                                                                            <label
                                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                data-kt-image-input-action="change"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Change avatar">
                                                                                <i class="ki-duotone ki-pencil fs-7">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                                <input type="file" name="image"
                                                                                    accept=".png, .jpg, .jpeg, .svg, .gif" />
                                                                                <input type="hidden"
                                                                                    name="avatar_remove" />
                                                                            </label>
                                                                            <span
                                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                data-kt-image-input-action="cancel"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Cancel avatar">
                                                                                <i class="ki-duotone ki-cross fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </span>
                                                                            <span
                                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                data-kt-image-input-action="remove"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Remove avatar">
                                                                                <i class="ki-duotone ki-cross fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="form-text"
                                                                            style="margin-top: 25px;margin-bottom: -30px;">
                                                                            Attention: Allowed file types: png, jpg,
                                                                            jpeg, svg, gif.</div>
                                                                        <!-- End Images -->
                                                                    </center>
                                                                    <div
                                                                        class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                        <input type="hidden"
                                                                            class="form-control form-control-solid"
                                                                            name="app_id" value="<?= $app_id; ?>">
                                                                        <input type="hidden"
                                                                            class="form-control form-control-solid"
                                                                            name="modul" value="<?= $_GET['m']; ?>">
                                                                        <input type="hidden"
                                                                            class="form-control form-control-solid"
                                                                            name="page" value="<?= $_GET['s']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-md btn-light-primary"
                                                            data-bs-dismiss="modal">
                                                            Discard
                                                        </button>
                                                        <button type="submit" name="loader_"
                                                            class="btn btn-md btn-primary">
                                                            Save Changes
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Images Loader -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-xl-stretch me-md-6">
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                            href="<?= $background_img == NULL ? 'assets/media/svg/files/blank-image.svg' : 'assets/my-content/background/' . $background_img ?>">
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                style="background-image:url('<?= $background_img == NULL ? 'assets/media/svg/files/blank-image.svg' : 'assets/my-content/background/' . $background_img ?>')">
                            </div>
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-duotone ki-eye fs-2x text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                        </a>
                        <div class="mt-5">
                            <div style="display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <a href="#" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">
                                        Background Image
                                    </a>
                                </div>
                                <div>
                                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-trigger="hover" title="Click to change image Background">
                                        <a href="#"
                                            class="btn btn-icon btn-sm btn-outline btn-outline-dashed btn-outline-dark btn-active-light-dark"
                                            data-bs-toggle="modal" data-bs-target="#modal_background<?= $app_id; ?>">
                                            <span class="svg-icon svg-icon-muted svg-icon-2"><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z"
                                                        fill="currentColor" />
                                                    <path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- Modal Images Background -->
                                    <div class="modal fade" id="modal_background<?= $app_id; ?>" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form action="pages/settings/action/action.php" method="POST"
                                                    enctype="multipart/form-data">
                                                    <div class="modal-header" style="margin-top: 0px;">
                                                        <h2>
                                                            <div
                                                                style="display: flex;justify-content:start;align-items: center;">
                                                                <div>
                                                                    <a href="#" class="btn btn-icon btn-light-primary">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="currentColor">
                                                                                <path opacity="0.3"
                                                                                    d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
                                                                                    fill="currentColor" />
                                                                                <path
                                                                                    d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div style="margin-left: 5px;">
                                                                    <div>
                                                                        <div>
                                                                            Change Image
                                                                        </div>
                                                                        <div
                                                                            style="font-size: 10px;color: #707380;font-weight: 400;font-style: normal;">
                                                                            Action change image for background
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </h2>
                                                        <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                            data-bs-dismiss="modal">
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)" fill="black">
                                                                    </rect>
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)" fill="black">
                                                                    </rect>
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
                                                                        <div class="image-input image-input-outline"
                                                                            data-kt-image-input="true"
                                                                            style="background-image: url('assets/media/svg/files/blank-image.svg')">
                                                                            <div class="image-input-wrapper w-125px h-125px"
                                                                                style="background-image: url(<?= $background_img == NULL ? 'assets/media/svg/files/blank-image.svg' : 'assets/my-content/background/' . $background_img ?>);background-position: center;background-repeat: no-repeat;background-size: cover;">
                                                                            </div>
                                                                            <label
                                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                data-kt-image-input-action="change"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Change avatar">
                                                                                <i class="ki-duotone ki-pencil fs-7">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                                <input type="file" name="image"
                                                                                    accept=".png, .jpg, .jpeg, .svg, .gif" />
                                                                                <input type="hidden"
                                                                                    name="avatar_remove" />
                                                                            </label>
                                                                            <span
                                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                data-kt-image-input-action="cancel"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Cancel avatar">
                                                                                <i class="ki-duotone ki-cross fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </span>
                                                                            <span
                                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                data-kt-image-input-action="remove"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Remove avatar">
                                                                                <i class="ki-duotone ki-cross fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="form-text"
                                                                            style="margin-top: 25px;margin-bottom: -30px;">
                                                                            Attention: Allowed file types: png, jpg,
                                                                            jpeg, svg, gif.</div>
                                                                        <!-- End Images -->
                                                                    </center>
                                                                    <div
                                                                        class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                                        <input type="hidden"
                                                                            class="form-control form-control-solid"
                                                                            name="app_id" value="<?= $app_id; ?>">
                                                                        <input type="hidden"
                                                                            class="form-control form-control-solid"
                                                                            name="modul" value="<?= $_GET['m']; ?>">
                                                                        <input type="hidden"
                                                                            class="form-control form-control-solid"
                                                                            name="page" value="<?= $_GET['s']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-md btn-light-primary"
                                                            data-bs-dismiss="modal">
                                                            Discard
                                                        </button>
                                                        <button type="submit" name="background_"
                                                            class="btn btn-md btn-primary">
                                                            Save Changes
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Images Background -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Images -->

                <!-- Detail -->
                <div class="separator separator-dashed" style="margin-top: 30px;margin-bottom: 15px;"></div>
                <div class="col-12">
                    <div class="d-flex flex-stack" style="margin-top: -25px;">
                        <h3 class="text-dark">Detail Application</h3>
                    </div>
                </div>
                <div class="separator separator-dashed" style="margin-top: 1px;margin-bottom: 8px;"></div>
                <form action="pages/settings/action/action.php" method="POST">
                    <div class="modal-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-2">
                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span>Main Color</span>
                                        </label>
                                        <input type="color" class="form-control form-control-solid" name="main_color"
                                            placeholder="Main Color ..." value="<?= $main_color; ?>">
                                        <input type="hidden" class="form-control form-control-solid" name="app_id"
                                            value="<?= $app_id; ?>">
                                        <input type="hidden" class="form-control form-control-solid" name="modul"
                                            value="<?= $_GET['m']; ?>">
                                        <input type="hidden" class="form-control form-control-solid" name="page"
                                            value="<?= $_GET['s']; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span>Hover Color</span>
                                        </label>
                                        <input type="color" class="form-control form-control-solid" name="hover_color"
                                            placeholder="Hover Color ..." value="<?= $hover_color; ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span>App Name</span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" name="app_name"
                                            placeholder="App Name ..." value="<?= $app_name; ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span>Title Name</span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" name="title_name"
                                            placeholder="Title Name ..." value="<?= $title_name; ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span>Company Name</span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" name="company"
                                            placeholder="Company Name ..." value="<?= $company; ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span>Development Stage</span>
                                        </label>
                                        <select name="type" data-control="select2"
                                            class="form-select form-select-solid form-select-lg">\
                                            <?php if ($type == NULL) { ?>
                                                <option value="">Select Development Stage</option>
                                            <?php } else { ?>
                                                <option value="<?= $type ?>"><?= $type ?></option>
                                                <option value="">Select Development Stage</option>
                                            <?php } ?>
                                            <option value="Alpha">Alpha</option>
                                            <option value="Beta">Beta</option>
                                            <option value="Release candidate (RC)">Release candidate (RC)</option>
                                            <option value="Release">Release</option>
                                            <option value="Post-release fixes">Post-release fixes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span>Version</span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" name="version"
                                            placeholder="Version ..." value="<?= $version; ?>">
                                    </div>
                                </div>
                                <div>
                                    <div class="card-footer d-flex justify-content-end">
                                        <a href="" class="btn btn-md btn-light-primary me-2">Discard</a>
                                        <button type="submit" name="update_" class="btn btn-md btn-primary">Save
                                            Changes</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </form>
                <!-- Detail -->
            </div>
        </div>
    </div>
</div>