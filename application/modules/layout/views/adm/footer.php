<footer class="main-footer">
    <div class="footer-left">
        <?php echo config_item('web_footer'); ?>
    </div>
    <div class="footer-right">
        v-0.1
    </div>
</footer>
</div>
</div>


<!-- General JS Scripts -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>

<script src="<?= base_url('assets/'); ?>js/jquery.nicescroll.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/moment.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/stisla.js"></script>

<!-- JS Libraies -->
<!-- jquery mask -->
<script src="<?= base_url('assets/'); ?>js/jquery.mask.min.js"></script>

<!-- Template JS File -->
<script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
<script src="<?= base_url('assets/'); ?>js/custom.js"></script>
<!-- my custom js -->
<script src="<?= base_url('assets/'); ?>js/modalscustom.js?t=<?= time() ?>"></script>
<!-- Page Specific JS File -->

<!-- DataTables -->
<script src="<?= base_url('assets/'); ?>datatable/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url('assets/'); ?>datatable/datatables-bs4/js/dataTables.bootstrap4.js"></script>


<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });


    $(document).ready(function() {
        $('.currency').mask('0,000,000,000', {
            reverse: true
        });
    });
    $(function() {
        $('#tbn').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true,

        });
    });
</script>
</body>

</html>