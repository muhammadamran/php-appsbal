<div id="kt_app_footer" class="app-footer align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3">
    <div class="text-dark order-2 order-md-1">
        <span>
            Powered by <img class="mx-auto" src="assets/codingtime/CT-01.png" alt="" style="width: 85px;" /> |
        </span>
        <span class="text-muted fw-semibold me-1">2024 &copy;</span>
        <a href="#" target="_blank" class="text-gray-800 text-hover-primary"><?= $app_name ?></a>
    </div>
    <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1" style="display: flex;justify-content: center;align-items: center;">
        <?php
        $clientdataquery = $db->query("SELECT * FROM clients WHERE is_deleted='false' ORDER BY client_id ASC");
        while ($clientrow = mysqli_fetch_array($clientdataquery)) {
        ?>
            <li class="menu-item">
                <a href="#" class="menu-link px-2">
                    <div>
                        <img src="assets/my-content/clients/<?= $clientrow['image']; ?>" alt="<?= $clientrow['client_name']; ?>" style="width: 60px;">
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>