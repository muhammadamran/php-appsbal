<?php include "include/login/head.php"; ?>
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <?php if ($logo_img == NULL) {
            $logo = 'none';
        } else {
            $logo = 'show';
        } ?>
        <div class="d-flex flex-column flex-lg-row-auto hover-bg w-xl-800px positon-xl-relative">
            <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-800px scroll-y" id="bg-login">
                <!-- <div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">
                    <a href="index.php" class="py-2 py-lg-20">
                        <img alt="Logo" src="assets/my-content/logo/<?= $logo_img; ?>" style="display: <?= $logo; ?>" class="h-40px h-lg-50px" />
                    </a>
                    <h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">Welcome to <?= $app_name ?></h1>
                    <p class="d-none d-lg-block fw-semibold fs-2 text-white">
                        Application <?= $app_name ?> for our <?= $company ?>
                    </p>
                </div> -->
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                    <form class="form w-100" action="execute.php" method="POST">
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Log In to <?= $app_name ?></h1>
                            <div class="text-gray-400 fw-semibold fs-4">
                                👋 Happy to see you again!
                            </div>
                        </div>
                        <!--begin::Alert-->
                        <?php if (isset($_GET['OutAccess'])) { ?>
                        <div class="alert alert-info alert-dismissible">
                            <strong>Log Out!</strong> Successfully log out, your session has been ended.
                        </div>
                        <?php } ?>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger alert-dismissible">
                            <strong>Failed Log In!</strong> Incorrect email or password.
                        </div>
                        <?php } ?>
                        <!--end::Alert-->
                        <div class="fv-row mb-10" style="margin-bottom: 10px !important;">
                            <label class="form-label fs-6 fw-bold text-dark">Email</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" name="username"
                                id="Username" autocomplete="off" placeholder="Email..." required />
                        </div>
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bold text-dark fs-6 mb-0">Password</label>
                            </div>
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                name="password" id="Password" autocomplete="off" placeholder="Password..." required />
                        </div>
                        <div style="margin-top: -20px;margin-bottom: 15px;">
                            <label class="form-check form-check-custom form-check-solid align-items-start">
                                <input class="form-check-input me-3" type="checkbox" onclick="myFunction()">
                                <span class="form-check-label d-flex flex-column align-items-start">
                                    <span class="form-label fw-bold text-dark fs-6 mb-0">Show Password</span>
                                </span>
                            </label>
                        </div>

                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit"
                                class="btn btn-lg main-bg btn-success w-100 mb-5">
                                <span class="indicator-label">
                                    <i class="fas fa-sign-in-alt"></i>
                                    Log In
                                </span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                            <!-- <div class="text-center text-muted text-uppercase fw-bold mb-5">or</div>
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />
                                Continue with Google
                            </a> -->
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0" style="margin-top: -60px;">
                <div class="d-flex flex-center fw-semibold fs-6">
                    <a href="#" class="text-muted text-hover-primary px-2"><?= $type ?></a>
                    <a href="#" class="text-muted text-hover-primary px-2">Version <?= $version ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Show Password -->
<script type="text/javascript">
function myFunction() {
    var x = document.getElementById("Password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
<!-- End Show Password -->
<script type="text/javascript">
// if (window?.location?.href?.indexOf('OutAccess') > -1) {
//     Swal.fire({
//         title: 'Berhasil Sign Out!',
//         icon: 'success',
//         html: '<font style="font-weight: 500;">Anda berhasil keluar dan <b><i>session</i></b> anda telah berakhir!</font>',
//     })
//     history.replaceState({}, '', './index.php');
// }
</script>
<?php include "include/login/footer.php"; ?>