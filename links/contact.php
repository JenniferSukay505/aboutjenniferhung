<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!-- Bootstrap -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc=
		sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
				crossorigin="anonymous">
		<link rel="stylesheet" href= "../css/styles.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
		<script type="text/javacript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"
				  integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc=
					sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
				  crossorigin="anonymous"></script>

	<head>
	<body>
		<header class="bgimage">
			<div  class="container">
				<h1>CodeGirl</h1>
			</div>
		</header>
		<div class="clearfix"></div>
		<nav class="navbar navbar-inverse">
			<!-- logo and mobile toggle button get grouped together for better mobile display-->
			<div class="navbar-header">
				<!-- this is the mobile menu button-->
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">
					<span class="sr-only">main menu</span>
					<span class="glyphicon glyphicon-menu-hamburger"></span>
				</button>
				<div class="clearfix"></div>
			</div>
			<!-- here are your main nav links, grouped for toggling-->
			<div class="collapse navbar-collapse" id="main-menu">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../public_html/documentation/milestone-1.php">Home</a></li>
					<li><a href="../new.php">Links</a></li>
					<li><a href="../links/contact.php">Contact</a></li>
				</ul>
			</div>

		<div class="container"></div>

		<div class="col-xs-12 col-md-7 form-wrap">
				<form method="get" action="#" id="sample-form" class="form-horizontal col-xs-10 col-xs-offset-1">
					<div class="form-group">
						<label for="inputName1" class="control-label">Name</label>
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							</div>
							<input type="text" class="form-control" id="textName1" placeholder="Your name here." maxlength="150" />
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="control-label">Email</label>
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</div>
							<input type="email" id="emai1" class="form-control" maxlength="150" placeholder="your.email@something.com"/>
						</div>
					</div>

					<div class="form-group">
						<label for="genderRadio" class="control-label">Choose your gender identity:</label>
							<div class="col-xs-12">
								<div class="radio-inline">
									<label>
										<input type="radio" name="rdoGender" id="radioGenderMale" value="Male" />Male
									</label>
								</div>
								<div class="radio-inline">
									<label>
										<input type="radio" name="rdoGender" id="radioGenderFemale" value="Female" />Female
									</label>
								</div>
								<div class="radio-inline">
									<label>
										<input type="radio" name="rdoGender" id="radioGenderOther" value="Other" />Other
									</label>
								</div>
								<div class="radio-inline">
									<label>
										<input type="radio" name="rdoGender" id="radioGenderDecline" value="Prefer not to state." />I prefer not to state.
									</label>
								</div>
							</div>


					<div class="form-group">
						<label class="control-label" for="txtareaComments">Tell Me More About Yourself:</label>
						<textarea class="form-control" rows="5" id="txtareaComments" maxlength="500" placeholder="500 characters max."></textarea>
					</div>
				</div>
			</div>
		<div class="clearfix"></div>


		<div class="form-group">
						<a id="reset-form" class="btn" role="button">Reset Form</a>
						<button type="submit" class="btn">Submit</button>
					</div>
				</body>
			</html>