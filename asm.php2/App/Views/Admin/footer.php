<!-- Footer -->
<footer class="footer mt-auto">
  <div class="copyright bg-white">
    <p>
      &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a class="text-primary"
        href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
    </p>
  </div>
  <script>
    var d = new Date();
    var year = d.getFullYear();
    document.getElementById("copy-year").innerHTML = year;
  </script>
</footer>

</div>
</div>

<!-- Card Offcanvas -->
<div class="card card-offcanvas" id="contact-off">
  <div class="card-header">
    <h2>Contacts</h2>
    <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
  </div>
  <div class="card-body">

    <div class="mb-4">
      <input type="text" class="form-control form-control-lg form-control-secondary rounded-0"
        placeholder="Search contacts...">
    </div>

    <div class="media media-sm">
      <div class="media-sm-wrapper">
        <a href="user-profile.html">
        <img src="../../../public/assets/admin/images/user/user-sm-03.jpg" alt="User Image">
          <span class="active bg-primary"></span>
        </a>
      </div>
      <div class="media-body">
        <a href="user-profile.html">
          <span class="title">Selena Wagner</span>
          <span class="discribe">Designer</span>
        </a>
      </div>
    </div>

    <div class="media media-sm">
      <div class="media-sm-wrapper">
        <a href="user-profile.html">
        <img src="../../../public/assets/admin/images/user/user-sm-03.jpg" alt="User Image">
          <span class="active bg-primary"></span>
        </a>
      </div>
      <div class="media-body">
        <a href="user-profile.html">
          <span class="title">Walter Reuter</span>
          <span>Developer</span>
        </a>
      </div>
    </div>

    <div class="media media-sm">
      <div class="media-sm-wrapper">
        <a href="user-profile.html">
          <img src="../../../public/assets/admin/images/user/user-sm-03.jpg" alt="User Image">
        </a>

      </div>
      <div class="media-body">
        <a href="user-profile.html">
          <span class="title">Larissa Gebhardt</span>
          <span>Cyber Punk</span>
        </a>
      </div>
    </div>

    <div class="media media-sm">
      <div class="media-sm-wrapper">
        <a href="user-profile.html">
        <img src="../../../public/assets/admin/images/user/user-sm-03.jpg" alt="User Image">
        </a>

      </div>
      <div class="media-body">
        <a href="user-profile.html">
          <span class="title">Albrecht Straub</span>
          <span>Photographer</span>
        </a>
      </div>
    </div>

    <div class="media media-sm">
      <div class="media-sm-wrapper">
        <a href="user-profile.html">
        <img src="../../../public/assets/admin/images/user/user-sm-03.jpg" alt="User Image">
          <span class="active bg-danger"></span>
        </a>
      </div>
      <div class="media-body">
        <a href="user-profile.html">
          <span class="title">Leopold Ebert</span>
          <span>Fashion Designer</span>
        </a>
      </div>
    </div>

    <div class="media media-sm">
      <div class="media-sm-wrapper">
        <a href="user-profile.html">
        <img src="../../../public/assets/admin/images/user/user-sm-03.jpg" alt="User Image">
          <span class="active bg-primary"></span>
        </a>
      </div>
      <div class="media-body">
        <a href="user-profile.html">
          <span class="title">Selena Wagner</span>
          <span>Photographer</span>
        </a>
      </div>
    </div>

  </div>
</div>



<script src="../../../public/assets/admin/plugins/jquery/jquery.min.js"></script>
<script src="../../../public/assets/admin/plugins/nprogress/nprogress.js"></script>
<script src="../../../public/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../public/assets/admin/plugins/simplebar/simplebar.min.js"></script>
<script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.js"></script>



<script src="../../../public/assets/admin/plugins/apexcharts/apexcharts.js"></script>



<script src="../../../public/assets/admin/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>



<script src="../../../public/assets/admin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="../../../public/assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="../../../public/assets/admin/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>



<script src="../../../public/assets/admin/plugins/daterangepicker/moment.min.js"></script>
<script src="../../../public/assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
<script>
  jQuery(document).ready(function () {
    jQuery('input[name="dateRange"]').daterangepicker({
      autoUpdateInput: false,
      singleDatePicker: true,
      locale: {
        cancelLabel: 'Clear'
      }
    });
    jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
      jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
    });
    jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
      jQuery(this).val('');
    });
  });
</script>



<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



<script src="../../../public/assets/admin/js/mono.js"></script>
<script src="../../../public/assets/admin/js/chart.js"></script>
<script src="../../../public/assets/admin/js/map.js"></script>
<script src="../../../public/assets/admin/js/custom.js"></script>


<!--  -->


</body>

</html>