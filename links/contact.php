<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="../css/styles.css" type="text/css">
		<!-- jQuery library -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>

		<!-- Latest compiled javascript-->
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<title>About Jennifer Sukay</title>
	</head>
	<body>
		<header class="bgimage">
			<div class="clearfix"></div>
			<div class="container">
				<div class="col-xs-12 col-md-7">

				<h1><a href="../public_html/documentation/milestone-1.php" title="codegirl">CodeGirl</a></h1>
				<div class="clearfix"></div>
			</div>
		</header>
		<header class="banner">
			<div class="container"></div>
		</header>

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