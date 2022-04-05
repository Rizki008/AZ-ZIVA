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

<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function() {
			$(this).remove();
		});
	}, 3000)
</script>
<script>
	console.log = function() {}
	$("#obat").on('change', function() {

		$(".qty").html($(this).find(':selected').attr('data-qty'));
		$(".qty").val($(this).find(':selected').attr('data-qty'));

		$('input[type=number]').attr('max', $('option:selected', this).data('max'));

	});
</script>
<script>
	console.log = function() {}
	$("#pesan_obat").on('change', function() {

		$(".nama").html($(this).find(':selected').attr('data-nama'));
		$(".nama").val($(this).find(':selected').attr('data-nama'));
	});
</script>
<script>
	$('.pemesanan tbody').on('click', 'button', function() {
		console.log($(this).attr("data-idobat"));
		$.ajax({
			url: '<?= base_url() ?>data_berobat/detail_berobat/' + $(this).attr("data-idobat"),
			dataType: 'json',
			type: 'get',
			contentType: 'application/x-www-form-urlencoded',
			data: $(this).serialize(),
			success: function(data, textStatus, jQxhr) {
				$('#list_detail_obat').html("");
				console.log(data.detail.length);
				for (var i = 0; i < data.detail.length; i++) {
					console.log(data.detail.length);
					$('#list_detail_obat').append("<li class=\"item\"><div class=\"product-info\"><a href=\"javascript:void(0)\" class=\"product-title\">" + data.detail[i].nama_obat + "<span class=\"badge badge-danger float-right\"></span></a><span class=\"product-description\">Qty: " + data.detail[i].qty + "</span></div></li></ul>  <div class=\"card-footer text-center\"><a href=\"javascript:void(0)\" class=\"uppercase\"></a></div>");
				}
				$('.list_open').slideDown('slow');
			},
			error: function(jqXhr, textStatus, errorThrown) {
				console.log(errorThrown);
			}
		});
	});
</script>
</body>

</html>
