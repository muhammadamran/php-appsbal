<script type="text/javascript">
    // Datatables
    $(document).ready(function() {
        $('#tabledid').DataTable({
            fixedColumns: {
                start: 0,
                end: 1
            },
            scrollCollapse: true,
            scrollX: true,
            scrollY: 500,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false,
            }],
            "lengthMenu": [
                [10, 25, 50, 75, 100, -1],
                [10, 25, 50, 75, 100, "All"]
            ],
            "language": {
                "info": "<font style='color:#5E6278;font-weight: 500;'>Showing _START_ to _END_ of _TOTAL_ Records</font>",
                searchPlaceholder: "🔍 Search Data",
            }
        });
        $('#tabledid-usr-program').DataTable({
            fixedColumns: {
                start: 0,
                end: 2
            },
            scrollCollapse: true,
            scrollX: true,
            scrollY: 500,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false,
            }],
            "lengthMenu": [
                [10, 25, 50, 75, 100, -1],
                [10, 25, 50, 75, 100, "All"]
            ],
            "language": {
                "info": "<font style='color:#5E6278;font-weight: 500;'>Showing _START_ to _END_ of _TOTAL_ Records</font>",
                searchPlaceholder: "🔍 Search Data",
            }
        });
        $('#tabledid-bank').DataTable({
            fixedColumns: {
                start: 0,
                end: 1
            },
            scrollCollapse: true,
            scrollX: true,
            scrollY: 1500,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false,
            }],
            "lengthMenu": [
                [100, -1],
                [100, "All"]
            ],
            "language": {
                "info": "<font style='color:#5E6278;font-weight: 500;'>Showing _START_ to _END_ of _TOTAL_ Records</font>",
                searchPlaceholder: "🔍 Search Data",
            }
        });
        $('#MyTableCompany').DataTable({
            scrollCollapse: true,
            autoWidth: false,
            responsive: false,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false,
            }],
            "lengthMenu": [
                [10, 25, 50, 75, 100, -1],
                [10, 25, 50, 75, 100, "All"]
            ],
            "language": {
                "info": "Showing _START_ to _END_ of _TOTAL_ Records",
                searchPlaceholder: "🌐 Search Data",
            }
        });
        $('#MyTableRole').DataTable({
            scrollCollapse: true,
            autoWidth: false,
            responsive: false,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false,
            }],
            "lengthMenu": [
                [10, 25, 50, 75, 100, -1],
                [10, 25, 50, 75, 100, "All"]
            ],
            "language": {
                "info": "Showing _START_ to _END_ of _TOTAL_ Records",
                searchPlaceholder: "🌐 Search Data",
            }
        });
        $('.form-select').select2();
    });
</script>