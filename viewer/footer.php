        <?php 
      $stmt = $conn->prepare("SELECT * from  web_management ");
            
            $stmt->execute();
            $record1 = $stmt->fetchAll();
            foreach($record1 as $rec){?>

 <footer class="content-footer">
                    <div class="footer">
                        
                    </div>
                </footer>
            <?php } ?>

                <script src="../assets/js/sample.js"></script>
                <script src="../assets/js/select2.js"></script>
                <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
                <script src="../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
                <script src="../assets/vendor/bootstrap/dist/js/bootstrap.js"></script>
               <!--  <script src="../assets/vendor/PACE/pace.min.js"></script> -->
                <script src="../assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script><script src="../assets/vendor/d3/d3.min.js"></script>    
              
    <!-- endbuild -->

    <!-- build:js assets/js/app.min.js -->
    <!-- core js -->
    <script src="../assets/js/app.js"></script>
    <!-- configurator js -->
    <script src="../assets/js/configurator.js"></script>
    <!-- endbuild -->

 


    <!-- page js -->
    <!-- jslink -->
    
<script type="text/javascript">

$(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

</script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>


<!--  <script type="text/javascript">
        $('.xyz').select2({
               });
</script>  -->