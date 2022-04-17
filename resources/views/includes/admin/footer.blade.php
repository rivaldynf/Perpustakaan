<div class="clearfix"></div>
<footer class="main-footer text-center">
    <div id="mycredit"><strong> Copyright &copy;  Sistem Informasi Perpustakaan 
    {{-- </strong> All rights | Page rendered in <strong></strong> seconds.  --}}
</footer>

<div id="logout"></div>
<script src="/assets_style/assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/assets_style/assets/bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="/assets_style/assets/plugins/summernote/summernote-lite.js"></script>

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>

<script>
    $('#summernotehal').summernote({
        height: 150,
        tabsize: 1,
        direction: 'rtl',
        toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
								['view', ['fullscreen', 'help']],
								['table', ['table']],
                ],
	});
</script>
<script src="/assets_style/assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script>

$(function() {
    $('.select2').select2();
});
(function($) {
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  };
}(jQuery));
$("#uintTextBox").inputFilter(function(value) {
  return /^\d*$/.test(value); });
$("#uintTextBox2").inputFilter(function(value) {
  return /^\d*$/.test(value); });
$("#uintTextBox3").inputFilter(function(value) {
  return /^\d*$/.test(value); });
</script>
<script>
    // notifikasi gagal di hide
    //$("#notifikasi").hide();
    var logingagal = function(){
        $("#notifikasi").fadeOut('slow');
    };
    setTimeout(logingagal, 4000);
</script> 

<!-- custom jQuery -->
<script src="/assets_style/assets/dist/js/custom.js"></script>

<!-- Logout Ajax -->
<!-- AdminLTE App -->
<script src="/assets_style/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets_style/assets/dist/js/demo.js"></script>
<!-- PACE -->
<script src="/assets_style/assets/bower_components/PACE/pace.min.js"></script>
<!-- DataTables -->
<script src="/assets_style/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets_style/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="/assets_style/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="/assets_style/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
</body>
</html>
