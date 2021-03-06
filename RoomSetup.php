<!DOCTYPE html>
<html>
<head>

	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/dropzone/src/dropzone.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/switchery/dist/switchery.css">
	<!-- bootstrap-tagsinput css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
	<!-- bootstrap-touchspin css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css">
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Room</h4>
							</div> 
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Room</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-secondary" href="#" role="button" data-toggle="dropdown">
									<?php echo date("F-d"); ?>
								</a>
								<!-- s -->
							</div>
						</div>
					</div>
				</div>
				
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Setup Room Information</h4>
							<p class="mb-30 font-14">All your rooms are setting up for announce</p>
						</div>
					</div>
					<form>
							<hr/>
								<div class="clearfix mb-20">
									<div class="pull-left">
										<h4 class="text-blue">Image</h4>
									</div>
								</div>
								<div class="dropzone form-group col-md-4" action="#" id="my-awesome-dropzone">
									<div class="fallback">
										<input type="file" name="file" />
									</div>
								</div>
						    <div class="form-group">
				              <p class="help-block well">* Upload your Room Photo  .</p>
				            </div>
						
						<div class="form-group">
							<label>Hotel Name</label>
							<input class="form-control" type="text" placeholder="Enter Hotel Name" required disabled>
						</div>
						<div class="form-group">
							<label>Price</label>
							<input class="form-control" type="number" placeholder="Enter Price" required>
						</div>
						<div class="form-group">
							<label>Select Room Type</label>
							<select class="custom-select2 form-control" id ="region-list" name="state" style="width: 100%; height: 38px;">
								<option disabled selected="">Choose...</option>
								<option value="1">Single</option>
								<option value="2">Double</option>
								<option value="3">Family</option>
								<option value="4">Group</option>
								
							</select>
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control"></textarea>
						</div>
						<div class="form-group">
							<button class="btn btn-success">
								Submit
							</button>
						</div>
				</div>
				<!-- horizontal Basic Forms End -->

				

			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/dropzone/src/dropzone.js"></script>
	<script>
		
		$(document).ready(function() {
			// $.ajax({
			// 	url:"region.csv",
			// 	dataType:"text",
			// 	success:function(data){
			// 		var region = data.split("/\r?\n|\r/");
					
			// 		for(var count =0; count < region.length;count++){

			// 			var regionCompound = region[count].split(",");

			// 			var regionName;
						
			// 			for(var kk=0;kk < regionCompound.length;kk++){
			// 				regionName = regionCompound[kk].split(',');
			// 				console.log(regionName);
			// 				var list = document.createElement("option");
			// 				list.innerHtml = regionName[0];
							
			// 				$("#region").append(list);
			// 			}
			// 		}
			// 	}
			// });
			
			
		});
		
		function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.img-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo-id").change(function() {
        readURL(this);
    });

    Dropzone.autoDiscover = false;
		$(".dropzone").dropzone({
			addRemoveLinks: true,
			removedfile: function(file) {
				var name = file.name;
				var _ref;
				return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
			}
		});
		$('#region-list').on('change',function(){
			var townName = $('#region-list').val();
			$("#town-list option[value='X']").remove();
			
			$.post("town.php",
			    {
			        region: townName
			    },
			    function(data, status){
			    	var town = data.split(',');
			    	console.log(town);
			    	for(var i =0;i < town.length;i++){
			       	var o = new Option(town[i], "X");
		
					$(o).html(town[i]);
					$("#town-list").append(o);
				}
					
			    });
			//
			

		});
	</script>
</body>
</html>