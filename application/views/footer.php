            <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2019 <b>PT INDO SEIKI METAL UTAMA</b> v1.0. All Rights Reserved.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center"><img src="<?php echo base_url() ?>assets/ismu-logo.png" width="60" class="header-brand-img" alt="lavalite"></span>
                    </div>
                </footer>
                
            </div>
        </div>
        
        <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url() ?>assets/src/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/screenfull/dist/screenfull.js"></script>
        <script src="<?php echo base_url() ?>assets/js/datatables.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/dataTables/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/moment/moment.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/d3/dist/d3.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/c3/c3.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/charts.js?z"></script>

        <!-- Alert -->
        <script src="<?php echo base_url() ?>assets/plugins/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/alerts.js"></script>
        
        <!-- Combobox -->
        <script src="<?php echo base_url() ?>assets/plugins/select2/dist/js/select2.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/mohithg-switchery/dist/switchery.min.js"></script>

        <script src="<?php echo base_url() ?>assets/dist/js/theme.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/datedropper/datedropper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/form-picker.js?<?php echo time() ?>"></script>
        <script src="<?php echo base_url() ?>assets/plugins/sweetalert/dist/sweetalert.min.js"></script>

        <!-- Datatables Javascript -->
       
        
        <script>
            $(document).ready(function() {
               
            });

            $(document).ready(function() {
                $('#print_label').click(function() {
                    $("#iframe3").get(0).contentWindow.print();
                });
                $('#print_labelinput').click(function() {
                    $("#iframe2").get(0).contentWindow.print();
                });
            });

           

            $(document).ready(function() {
                $('#lpp_no').select2();
            });
            $(document).ready(function() {
                $('#edit_spk_no').select2();
            });

            $(document).ready(function() {
                $('#edit_lpp_no').select2();
            });

         
        </script>
    </body>
</html>
