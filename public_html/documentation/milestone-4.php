<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous"/>

		<!-- Optional Bootstrap theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous"/>

		<!--Font Awesome-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- ////////////////////////////////////////////////
		//// LINK TO YOUR CUSTOM CSS FILES HERE
		///////////////////////////////////////////////////// -->
		<link href="path-to-file/social-sharing.css" rel="stylesheet">


		<link rel="stylesheet" href="../css/styles.css" type="text/javascript"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!-- <[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- js-cookie (for capstone) -->
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/js-cookie/2.0.2/js.cookie.min.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<!-- jQuery form validation and additional methods (for capstone) -->
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/additional-methods.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>


		<!-- Page Title -->
		<title>Milestone 4</title>
	</head>

	<!----------------------------------------------------body-------------------------------------------------------->

	<body class="site">
		<div class="site-content">

	<!------------------------------------------------- side panel --------------------------------------------------->

			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="profile-sidebar">

	<!------------------------------------------------- side panel image---------------------------------------------->

							<div class="profile-img">
								<img src="http://placehold.it/75x75" class="img-responsive" alt="">
							</div><!--/.profile-userpic  -->

		<!-------------------------------------------- sidebar usertitle -------------------------------------------->

					<div class="sidebar-header">
						<div class="profile-name text-align:center">
							Jennifer Hung
						</div>
						<div class="profile-job">
							Developer
						</div>
					</div><!--/profile-usertitle -->

		<!----------------------------------------------- sidebar buttons---------------------------------------->

					<div class="profile-buttons text align:center">

						<!-- LinkedIn -->
						<a href="https://www.linkedin.com/in/jennifer-sukay-hung-23a08777
"
							title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a>

						<!-- Button to triggar Contact modal -->
						<a href="#contactModal" role="button" class="btn btn-danger btn-sm" data-toggle="modal">Message</a>

					</div><!-- /profile user-buttons -->

		<!-----------------------------------------------sidebar menu------------------------------------------>

					<div class="profile-menu">
						<ul class="nav">
							<li class="active"><a href="#about">About </a></li>
							<li><a href="#">Portfolio </a></li>
							<li><a href="#" target="_blank">Contact</a></li>
						</ul>
					</div><!--/profile-usermenu-->

				</div>
			</div>

			<div class="col-md-9">
				<div class="profile-content">
					 related content goes here...
				</div>
			</div>
		</div>
	</div>

	<br>
	<br>

			<!-----------------------------------------------contact modal------------------------------------------>
			<div class="container" id="contact-modal-wrapper">
			<div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">

					<div class="modal-content">

		<!-----------------------------------------------modal header----------------------------------------------->

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Contact Form</h4>
						</div>

		<!-----------------------------------------------modal body----------------------------------------------->


						<div class="modal-body">
							<form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">

								<div class="form-group">
									<label class="control-label col-md-4" for="first_name">First Name</label>
									<div class="col-md-6" id="first-name">
										<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"/>
									</div><!--/col-md-6 #first-name-->
								</div><!--/form-group-->

								<div class="form-group">
									<label class="control-label col-md-4" for="last_name">Last Name</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"/>
									</div><!--/col-md-6 #last-name-->
								</div><!--/form-group-->

								<div class="form-group">
									<label class="control-label col-md-4" for="email">Email Address</label>
									<div class="col-md-6 " id="email">
										<input type="email" class="form-control" id="email" name="email" placeholder="Email Address"/>
									</div><!--/col-md-6 #email-->
								</div><!--/form-group-->

								<div class="form-group">
									<label class="control-label col-md-4" for="comment">Question or Comment</label>
									<div class="col-md-6" id="comments">
										<textarea rows="6" class="form-control" id="comments" name="comments" placeholder="Your question or comment here"></textarea>
									</div><!--/col-md-6 #comments-->
								</div><!--/form-group-->

								<div class="form-group">
									<div class="col-md-6">
										<button type="submit" value="Submit" class="btn btn-custom pull-right">Send</button>
									</div><!--/col-md-6 #submit-->
								</div><!--/form-group-->

							</form>
						</div><!-- /.modal-body -->
					</div><!--/.modal-content -->
				</div><!-- /modal-dialog -->
			</div><!-- /contactModal -->
		</div><!--/form-horizontal-->

			<!----------------------------------------------footer-------------------------------------------------------->

	<footer>
		<?php require_once("footer.php"); ?>
	</footer>

	</body><!--/.site-->
</html>


