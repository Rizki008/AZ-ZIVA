</div>
</div>
<!-- partial:partials/_footer.html -->
<footer class="footer">
	<div class="card">
		<div class="card-body">
			<div class="d-sm-flex justify-content-center justify-content-sm-between">
			</div>
		</div>
	</div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- base:js -->
<script src="<?= base_url() ?>template/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="<?= base_url() ?>template/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?= base_url() ?>template/js/off-canvas.js"></script>
<script src="<?= base_url() ?>template/js/hoverable-collapse.js"></script>
<script src="<?= base_url() ?>template/js/template.js"></script>
<script src="<?= base_url() ?>template/js/settings.js"></script>
<script src="<?= base_url() ?>template/js/todolist.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="<?= base_url() ?>template/vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="<?= base_url() ?>template/vendors/select2/select2.min.js"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="<?= base_url() ?>template/js/file-upload.js"></script>
<script src="<?= base_url() ?>template/js/typeahead.js"></script>
<script src="<?= base_url() ?>template/js/select2.js"></script>
<!-- End custom js for this page-->
<!-- Custom js for this page-->
<script src="<?= base_url() ?>template/js/dashboard.js"></script>
<!-- End custom js for this page-->

<script>
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>
</body>

</html>
