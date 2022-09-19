</div>
<script src="<?= ROOT ?>/assets/js/dashboard.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->

<script>
	$().ready(function(){
		$('.alert').removeClass('hide');
		$('.alert').addClass('show');
		$('.alert').addClass('showAlert');
		setTimeout(function(){
			$('.alert').removeClass('show');
			$('.alert').addClass('hide');
		}, 3000);
	});

	$('.close_btn').click(function(){
		$('.alert').removeClass('show');
		$('.alert').addClass('hide');
	});
</script>
</body>

</html>