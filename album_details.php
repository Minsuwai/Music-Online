<!-- modal -->
<div class="modal fade" id="exampleModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Album Detail
				</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					
				</button>
			</div>
			<div class="modal-body" id="album-detail">
				
			</div>
		</div>
	</div>
</div>
<!-- End of Modal -->
<script>
	$(document).ready(function(){
		$('.view-album').click(function(){
			var vinyl_id = $(this).attr("id");
			$.ajax({
				url:"view_album_details.php",
				method:"post",
				data:{vinyl_id:vinyl_id},
				success:function(data){
					$('#album-detail').html(data);
					$('#exampleModal').modal("show");
				}
			});
		});
	});
</script>