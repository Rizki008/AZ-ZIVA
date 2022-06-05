<footer class="main-footer">
	<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
	All rights reserved.
	<div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 3.0.5
	</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>

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

		$(".name").html($(this).find(':selected').attr('data-name'));
		$(".name").val($(this).find(':selected').attr('data-name'));
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