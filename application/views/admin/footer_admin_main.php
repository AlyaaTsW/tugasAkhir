<!-- Footer -->
<!-- <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer> -->
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Klik "Keluar" di bawah jika Anda yakin ingin meninggalkan halaman ini.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?php echo base_url('Login/logout') ?>">Keluar</a>
            </div>
        </div>
    </div>
</div>

<div hidden="true">
  <input type="number" name="dis" id="dis" value="<?php echo $dis; ?>">
  <input type="number" name="ner" id="ner" value="<?php echo $ner; ?>">
  <input type="number" name="pro" id="pro" value="<?php echo $pro; ?>">
  <input type="number" name="sos" id="sos" value="<?php echo $sos; ?>">
  <input type="number" name="ipd" id="ipd" value="<?php echo $ipd; ?>">
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/js/demo/chart-area-demo.js') ?>"></script>
<script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<script src="js/demo/datatables-demo.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/js/demo/datatables-demo.js') ?>"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    } );
</script>
<script type="text/javascript">
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example
    var ctx = document.getElementById("myPieChart1");
    var dis = $('#dis').val();
    var ner = $('#ner').val();
    var pro = $('#pro').val();
    var sos = $('#sos').val();
    var ipd = $('#ipd').val();
    var myPieChart1 = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ["Distribusi", "Nerwilis", "Produksi", "Sosial", "IPDS"],
        datasets: [{
          data: [dis, ner, pro, sos, ipd],
          backgroundColor: ['#2980B9', '#3498DB', '#1ABC9C', '#16A085', '#27AE60'],
          hoverBackgroundColor: ['#73cedb', '#73cedb', '#73cedb', '#73cedb', '#73cedb'],
          hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          caretPadding: 10,
        },
        legend: {
          display: false
        },
        cutoutPercentage: 80,
      },
    });

</script>


</body>

</html>