    <!-- Bootstrap core JavaScript-->
    <script src="<?= $base_url ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= $base_url ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= $base_url ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= $base_url ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= $base_url ?>assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= $base_url ?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?= $base_url ?>assets/js/demo/chart-pie-demo.js"></script>

        <!-- Page level plugins -->
    <script src="<?= $base_url ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= $base_url ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= $base_url ?>assets/js/demo/datatables-demo.js"></script>


    <!-- TinyMCE -->
    <script src="<?= $base_url ?>assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
  tinymce.init({
    selector: '#fullcontent',
    plugins: [
      'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
      'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
      'media', 'table', 'emoticons', 'help'
    ],
    toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
      'forecolor backcolor emoticons | help',
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
  });
  </script>