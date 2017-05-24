        </div><!-- ./wrapper -->


        <!-- Bootstrap js -->
        <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/bootstrap.min.js'); ?>"></script>
        <!-- Style js -->
        <script type="text/javascript" src="<?php echo base_url('assets/inilabs/style.js'); ?>"></script>

        <!-- Jquery datatable js -->
        <script type="text/javascript" src="<?php echo base_url('assets/datatables/jquery.dataTables.js'); ?>"></script>
        <!-- Datatable js -->
        <script type="text/javascript" src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js'); ?>"></script>

        <script type="text/javascript" src="<?php echo base_url('assets/inilabs/inilabs.js'); ?>"></script>

        <!-- autocomplete plugin select2 js -->
        <script type="text/javascript" src="<?php echo base_url('assets/select2/select2.js'); ?>"></script>

        <!-- Jquery UI jquery -->
        <script src="<?php echo base_url('assets/jqueryUI/jqueryui.min.js'); ?>" type="text/javascript" charset="utf-8" async defer></script>
        
        <!-- Jquery gritter -->
        

        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>

        <script>
            $( ".select2" ).select2( { placeholder: "Select username", maximumSelectionSize: 6 } );
            $( ".guargianID" ).select2( { placeholder: "Select Guardian" , maximumSelectionSize: 6 } );

            $( "button[data-select2-open]" ).click( function() {
                $( "#" + $( this ).data( "select2-open" ) ).select2( "open" );
            });
        </script>


        <?php if ($this->session->flashdata('success')): ?>
            <script type="text/javascript">
                toastr["success"]("<?=$this->session->flashdata('success');?>")
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "500",
                  "hideDuration": "500",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
            </script>
        <?php endif ?>
        <?php if ($this->session->flashdata('error')): ?>
           <script type="text/javascript">
                toastr["error"]("<?=$this->session->flashdata('error');?>")
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "500",
                  "hideDuration": "500",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
            </script>
        <?php endif ?>

        
    </body>
</html>