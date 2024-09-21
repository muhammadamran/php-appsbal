<!--CKEditor Build Bundles:: Only include the relevant bundles accordingly-->
<script src="assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
<script src="assets/plugins/custom/ckeditor/ckeditor-inline.bundle.js"></script>
<script src="assets/plugins/custom/ckeditor/ckeditor-balloon.bundle.js"></script>
<script src="assets/plugins/custom/ckeditor/ckeditor-balloon-block.bundle.js"></script>
<script src="assets/plugins/custom/ckeditor/ckeditor-document.bundle.js"></script>
<script type="text/javascript">
    ClassicEditor
        .create(document.querySelector('#kt_docs_ckeditor_classic'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>

<?php
$jsdataquery = $db->query("SELECT * FROM income");
$jsno = 0;
while ($jsrow = mysqli_fetch_array($jsdataquery)) {
    $jsno++;
?>
    <script type="text/javascript">
        ClassicEditor
            .create(document.querySelector('#kt_docs_ckeditor_<?= $jsno ?>'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
<?php } ?>