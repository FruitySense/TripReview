<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<div class="profile-photo">
								<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
								<img src="vendors/images/photo2.jpg" alt="" class="user-avatar rounded-circle" id="image" alt="profile picture">
								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-body pd-5">
												<div class="img-container">
													<img id="image1" src="vendors/images/photo2.jpg" alt="Picture">
												</div>
											</div>
											<div class="modal-footer">
												<div class="custom-file">
													<input type="file" class="custom-file-input hiddenFile" hidden onchange="readURL(this);">
												</div>
												<input type="submit" value="Update" class="btn btn-primary update">
												<button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<h5 class="text-center"><?php echo $_SESSION['name'] ?></h5>
							<p class="text-center text-muted">Admin</p>
							<div class="profile-info">
								<h5 class="mb-20 weight-500">Contact Information</h5>
								<ul>
									<li>
										<span>Email Address:</span>
										FerdinandMChilds@test.com
									</li>
									<li>
										<span>Phone Number:</span>
										619-229-0054
									</li>
									<li>
										<span>Country:</span>
										America
									</li>
									<li>
										<span>Address:</span>
										1807 Holden Street<br>
										San Diego, CA 92115
									</li>
								</ul>
							</div>
							<div class="profile-social">
								<h5 class="mb-20 weight-500">Social Links</h5>
								<ul class="clearfix">
									<li><a href="#" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#" class="btn" data-bgcolor="#3d464d" data-color="#ffffff"><i class="fa fa-dropbox"></i></a></li>
									<li><a href="#" class="btn" data-bgcolor="#db4437" data-color="#ffffff"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="btn" data-bgcolor="#bd081c" data-color="#ffffff"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a href="#" class="btn" data-bgcolor="#00aff0" data-color="#ffffff"><i class="fa fa-skype"></i></a></li>
									<li><a href="#" class="btn" data-bgcolor="#00b489" data-color="#ffffff"><i class="fa fa-vine"></i></a></li>
								</ul>
							</div>
							
						</div>
					</div>
					<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="bg-white border-radius-4 box-shadow height-100-p">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#setting" role="tab">Settings</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane fade show active" id="setting" role="tabpanel">
											<div class="profile-setting">
												<form>
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															<h4 class="text-blue mb-20">Edit Your Personal Setting</h4>
															<div class="form-group">
																<label>Full Name</label>
																<input class="form-control form-control-lg" type="text">
															</div>
															<div class="form-group">
																<label>Title</label>
																<input class="form-control form-control-lg" type="text">
															</div>
															<div class="form-group">
																<label>Email</label>
																<input class="form-control form-control-lg" type="email">
															</div>
															<div class="form-group">
																<label>Date of birth</label>
																<input class="form-control form-control-lg date-picker" type="text">
															</div>
															<div class="form-group">
																<label>Gender</label>
																<div class="d-flex">
																<div class="custom-control custom-radio mb-5 mr-20">
																	<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
																	<label class="custom-control-label weight-400" for="customRadio4">Male</label>
																</div>
																<div class="custom-control custom-radio mb-5">
																	<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
																	<label class="custom-control-label weight-400" for="customRadio5">Female</label>
																</div>
																</div>
															</div>
															<div class="form-group">
																<label>Country</label>
																<select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" title="Not Chosen">
																	<option>United States</option>
																	<option>India</option>
																	<option>United Kingdom</option>
																</select>
															</div>
															<div class="form-group">
																<label>State/Province/Region</label>
																<input class="form-control form-control-lg" type="text">
															</div>
															<div class="form-group">
																<label>Postal Code</label>
																<input class="form-control form-control-lg" type="text">
															</div>
															<div class="form-group">
																<label>Phone Number</label>
																<input class="form-control form-control-lg" type="text">
															</div>
															<div class="form-group">
																<label>Address</label>
																<textarea class="form-control"></textarea>
															</div>
														
															<div class="form-group">
																<div class="custom-control custom-checkbox mb-5">
																	<input type="checkbox" class="custom-control-input" id="customCheck1-1">
																	<label class="custom-control-label weight-400" for="customCheck1-1">I agree to receive notification emails</label>
																</div>
															</div>
															<div class="form-group mb-0">
																<input type="submit" class="btn btn-primary" value="Update Information">
															</div>
														</li>
														<li class="weight-500 col-md-6">
															<h4 class="text-blue mb-20">Edit Social Media links</h4>
															<div class="form-group">
																<label>Facebook URL:</label>
																<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
															</div>
															<div class="form-group">
																<label>Twitter URL:</label>
																<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
															</div>
															<div class="form-group">
																<label>Linkedin URL:</label>
																<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
															</div>
															<div class="form-group">
																<label>Instagram URL:</label>
																<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
															</div>
															<div class="form-group">
																<label>Dribbble URL:</label>
																<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
															</div>
															<div class="form-group">
																<label>Dropbox URL:</label>
																<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
															</div>
															<div class="form-group">
																<label>Google-plus URL:</label>
																<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
															</div>
															<div class="form-group">
																<label>Pinterest URL:</label>
																<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
															</div>
															<div class="form-group">
																<label>Skype URL:</label>
																<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
															</div>
															<div class="form-group">
																<label>Vine URL:</label>
																<input class="form-control form-control-lg" type="text" placeholder="Paste your link here">
															</div>
															<div class="form-group mb-0">
																<input type="submit" class="btn btn-primary" value="Save & Update">
															</div>
														</li>
													</ul>
												</form>
											</div>
										
										</div>
									
										</div>
										<!-- Tasks Tab End -->
										<!-- Setting Tab start -->
										
										</div>
										<!-- Setting Tab End -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/cropperjs/dist/cropper.js"></script>
	<script>
	
    
		// window.addEventListener('DOMContentLoaded', function () {
		// 	var image = document.getElementById('image1');
		// 	var cropBoxData;
		// 	var canvasData;
		// 	var cropper;

		// 	$('#modal').on('shown.bs.modal', function () {
		// 		cropper = new Cropper(image, {
		// 			autoCropArea: 0.9,
		// 			dragMode: 'move',
		// 			aspectRatio: 1 / 1,
		// 			restore: false,
		// 			guides: false,
		// 			center: false,
		// 			highlight: false,
		// 			cropBoxMovable: false,
		// 			cropBoxResizable: false,
		// 			toggleDragModeOnDblclick: false,
		// 			ready: function () {
		// 				cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
		// 			}
		// 		});
		// 	}).on('hidden.bs.modal', function () {
		// 		cropBoxData = cropper.getCropBoxData();
		// 		canvasData = cropper.getCanvasData();
		// 		cropper.destroy();
		// 	});
		// });

		/*   fdsafdf
		// let result = document.querySelector('.image1'),
		// img_result = document.querySelector('.img-result'),
		// img_w = document.querySelector('.img-w'),
		// img_h = document.querySelector('.img-h'),
		// options = document.querySelector('.options'),
		// save = document.querySelector('.save'),
		// cropped = document.querySelector('.cropped'),
		// dwn = document.querySelector('.download'),
		// upload = document.querySelector('#file-input'),
		// cropper = '';

		// // on change show image with crop options
		// upload.addEventListener('change', (e) => {
		//   if (e.target.files.length) {
		// 		// start file reader
		//     const reader = new FileReader();
		//     reader.onload = (e)=> {
		//       if(e.target.result){
		// 				// create new image
		// 				let img = document.createElement('img');
		// 				img.id = 'image';
		// 				img.src = e.target.result
		// 				// clean result before
		// 				result.innerHTML = '';
		// 				// append new image
		//         result.appendChild(img);
		// 				// show save btn and options
		// 				save.classList.remove('hide');
		// 				options.classList.remove('hide');
		// 				// init cropper
		// 				cropper = new Cropper(img);
		//       }
		//     };
		//     reader.readAsDataURL(e.target.files[0]);
		//   }
		// });

		// // save on click
		// save.addEventListener('click',(e)=>{
		//   e.preventDefault();
		//   // get result to data uri
		//   let imgSrc = cropper.getCroppedCanvas({
		// 		width: img_w.value // input value
		// 	}).toDataURL();
		//   // remove hide class of img
		//   cropped.classList.remove('hide');
		// 	img_result.classList.remove('hide');
		// 	// show image cropped
		//   cropped.src = imgSrc;
		//   dwn.classList.remove('hide');
		//   dwn.download = 'imagename.png';
		//   dwn.setAttribute('href',imgSrc);
		// });
*/
		$('.update').click(function() {

			$('.hiddenFile').click();
		});

		$('.close').click(function() {

		});


		function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                // $('#image')
                //     .attr('src', e.target.result);
                $('#image1')
                    .attr('src', e.target.result);

                	var image = document.getElementById('image1');
					var cropBoxData;
					var canvasData;
					var cropper;

					cropBoxData = cropper.getCropBoxData();
		 			canvasData = cropper.getCanvasData();
		 			cropper.destroy();

                    cropper = new Cropper(image, {
					autoCropArea: 0.9,
					dragMode: 'move',
					aspectRatio: 1 / 1,
					restore: false,
					guides: false,
					center: false,
					highlight: false,
					cropBoxMovable: false,
					cropBoxResizable: false,
					toggleDragModeOnDblclick: false,
					ready: function () {
						cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
					}
				});
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
	</script>
</body>
</html>