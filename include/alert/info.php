<script type="text/javascript">
    // Type
    if (window?.location?.href?.indexOf('Type') > -1) {
        Swal.fire({
            icon: 'info',
            title: 'Information',
            html: '<font style="font-weight: 500;">Hey! It looks like your data hasn`t been saved yet. Double check the type of file you uploaded!</font>',
        })
        // Hey there! It looks like your data wasnt saved. Please select one or more of the Action options to proceed
        history.replaceState({}, '', './index.php?m=<?= $_GET['m']; ?>&s=<?= $_GET['s']; ?>');
    }

    // NameAlready
    if (window?.location?.href?.indexOf('NameAlready') > -1) {
        Swal.fire({
            icon: 'info',
            title: 'Information',
            html: '<font style="font-weight: 500;">Hey! The name is already available in the system, please input another name.</font>',
        })
        // Hey there! It looks like your data wasnt saved. Please select one or more of the Action options to proceed
        history.replaceState({}, '', './index.php?m=<?= $_GET['m']; ?>&s=<?= $_GET['s']; ?>');
    }

    // Nothing
    if (window?.location?.href?.indexOf('Nothing') > -1) {
        Swal.fire({
            icon: 'info',
            title: 'Information',
            html: '<font style="font-weight: 500;">Hey! No data is updated in the system.</font>',
        })
        // Hey there! It looks like your data wasnt saved. Please select one or more of the Action options to proceed
        history.replaceState({}, '', './index.php?m=<?= $_GET['m']; ?>&s=<?= $_GET['s']; ?>');
    }
</script>