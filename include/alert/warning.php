<script type="text/javascript">
    // AddFailed
    if (window?.location?.href?.indexOf('AddFailed') > -1) {
        Swal.fire({
            icon: 'error',
            title: 'Success!',
            html: '<font style="font-weight: 500;">Your data is unsuccessfully created and stored in the system</font>',
        })
        history.replaceState({}, '', './index.php?m=<?= $_GET['m']; ?>&s=<?= $_GET['s']; ?>');
    }
    // UpdateFailed
    if (window?.location?.href?.indexOf('UpdateFailed') > -1) {
        Swal.fire({
            icon: 'error',
            title: 'Success!',
            html: '<font style="font-weight: 500;">Your data is unsuccessfully updated</font>',
        })
        history.replaceState({}, '', './index.php?m=<?= $_GET['m']; ?>&s=<?= $_GET['s']; ?>');
    }
    // DeleteFailed
    if (window?.location?.href?.indexOf('DeleteFailed') > -1) {
        Swal.fire({
            icon: 'error',
            title: 'Success!',
            html: '<font style="font-weight: 500;">Your data is unsuccessfully deleted</font>',
        })
        history.replaceState({}, '', './index.php?m=<?= $_GET['m']; ?>&s=<?= $_GET['s']; ?>');
    }
</script>