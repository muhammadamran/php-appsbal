<div class="modal fade" id="kt_modal_create" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content">
            <form action="pages/account/action/action.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h2>
                        <div style="display: flex;justify-content:start;align-items: center;">
                            <div>
                                <a href="#" class="btn btn-icon btn-light-primary">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div style="margin-left: 5px;">
                                <div>
                                    <div>
                                        Add New Account
                                    </div>
                                    <div style="font-size: 10px;color: #707380;font-weight: 400;font-style: normal;">
                                        Created new account on this apps
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
                            <div class="col-4">
                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Email</span>
                                    </label>
                                    <input type="email" class="form-control form-control-solid" name="email" placeholder="Email ..." required>
                                    <input type="hidden" class="form-control form-control-solid" name="modul" value="<?= $_GET['m']; ?>">
                                    <input type="hidden" class="form-control form-control-solid" name="page" value="<?= $_GET['s']; ?>">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Password</span>
                                    </label>
                                    <input type="password" class="form-control form-control-solid" name="password" placeholder="Password ..." required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Role</span>
                                    </label>
                                    <select name="role" class="form-control form-control-solid" required>
                                        <option value="">Select Role</option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="User">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Name</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="name" placeholder="Name ..." required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Gender</span>
                                    </label>
                                    <select name="gender" class="form-control form-control-solid" required>
                                        <option value="">Select Gender</option>
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
                                    <input type="date" class="form-control form-control-solid" name="birth" placeholder="Date of Birth ...">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span>Age</span>
                                    </label>
                                    <input type="number" class="form-control form-control-solid" name="age" placeholder="Age ...">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span>Blood</span>
                                    </label>
                                    <select name="blood" class="form-control form-control-solid">
                                        <option value="">Select Blood</option>
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
                                        <option value="">Select Religion</option>
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
                    <button type="submit" name="add_" class="btn btn-md btn-primary">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>