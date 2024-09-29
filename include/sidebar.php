<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
        <div class="d-flex flex-column justify-content-between h-100 hover-scroll-overlay-y my-2 d-flex flex-column" id="kt_app_sidebar_main" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_main" data-kt-scroll-offset="5px">
            <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="flex-column-fluid menu menu-sub-indention menu-column menu-rounded menu-active-bg mb-7">
                <!--begin::Home-->
                <?php if ($_GET['m'] == 'home') { ?>
                    <?php
                    $time = date("H");
                    $timezone = date("e");
                    if ($time < "05") {
                        $text     = "Good morning";
                        $img_time = "morning.png";
                    } else if ($time >= "11" && $time < "16") {
                        $text     = "Good Afternoon";
                        $img_time = "afternoon1.png";
                    } else if ($time >= "16" && $time < "18") {
                        $text     = "Good Afternoon";
                        $img_time = "afternoon2.png";
                    } else if ($time >= "18") {
                        $text = "Good Evening";
                        $img_time = "evening1.png";
                    }
                    ?>
                    <div class="app-sidebar-project-default app-sidebar-project-minimize text-center min-h-lg-200px flex-column-auto d-flex flex-column justify-content-end" id="kt_app_sidebar_footer">
                        <img class="mx-auto h-150px h-lg-175px mb-4" src="assets/my-content/times/<?= $img_time; ?>" alt="" />
                        <div>
                            <font>
                                <?= $text; ?>,
                            </font>
                            <font style="font-size: 14px;font-weight: 700;text-transform: uppercase;">
                                <?= $_SESSION['first_name'] ?> <?= $_SESSION['middle_name'] ?> <?= $_SESSION['last_name'] ?>
                            </font>
                        </div>
                        <div class="fw-semibold text-gray-700">
                            Role <?= $_SESSION['role_code'] ?> - <?= $_SESSION['role_name'] ?>
                        </div>
                    </div>
                    <br>
                <?php } ?>
                <!--end::Home-->
                <?php if ($_GET['m'] != 'home') { ?>
                    <?php
                    include "menu/poin-of-sales.php";
                    ?>
                <?php } ?>
            </div>
        </div>
    </div>