<script type="text/javascript">
    // DataFailed
    if (window?.location?.href?.indexOf('DataFailed') > -1) {
        Swal.fire({
            icon: 'error',
            title: 'Information',
            html: '<font style="font-weight: 500;">Somethings wrong. Try again!</font>',
        })
        history.replaceState({}, '', './index.php');
    }
    // NotMatch
    if (window?.location?.href?.indexOf('NotMatch') > -1) {
        Swal.fire({
            icon: 'error',
            title: 'Information',
            html: '<font style="font-weight: 500;">Data month & year not match with your transaction date!</font>',
        })
        history.replaceState({}, '', './index.php');
    }
</script>