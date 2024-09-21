<script type="text/javascript">
    // AddSuccess
    if (window?.location?.href?.indexOf('AddSuccess') > -1) {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            html: '<font style="font-weight: 500;">Your data is successfully created and stored in the system</font>',
        })
        history.replaceState({}, '', './index.php?m=<?= $_GET['m']; ?>&s=<?= $_GET['s']; ?>');
    }
    // UpdateSuccess
    if (window?.location?.href?.indexOf('UpdateSuccess') > -1) {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            html: '<font style="font-weight: 500;">Your data is successfully updated</font>',
        })
        history.replaceState({}, '', './index.php?m=<?= $_GET['m']; ?>&s=<?= $_GET['s']; ?>');
    }
    // DeleteSuccess
    if (window?.location?.href?.indexOf('DeleteSuccess') > -1) {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            html: '<font style="font-weight: 500;">Your data is successfully deleted</font>',
        })
        history.replaceState({}, '', './index.php?m=<?= $_GET['m']; ?>&s=<?= $_GET['s']; ?>');
    }
</script>