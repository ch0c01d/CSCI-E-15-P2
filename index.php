<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Simple XKCD Password Generator</title>

		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:700,400%7CDroid+Serif:400,400italic,700" />
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

		<style type="text/css">
			footer {
				position: absolute;
				bottom: 0;
				color: #fff;
				width: 100%;
				background-color: #222;
				padding: 10px;
				height: 30px;
			}
		</style>
	</head>

	<body style="background-color:#eee;">
		<?php require 'xkcd.php' ?>

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1><span class="label label-primary">XKCD Password Generator</span></h1>
				</div>
			</div>

			<br/>

			<?php
				if(!empty($password_string)):
			?>
			<div class="row">
				<div class="col-sm-12 text-center">
					<h3><span class="label label-info"><?php echo $password_string; ?></span></h3>
				</div>
			</div>

			<br />
			<?php
				endif;
			?>

			<div class="row">
				<div class="col-md-3"></div>

				<div class="col-md-6">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#generate" aria-controls="generate" role="tab" data-toggle="tab">Generate</a>
						</li>

						<li role="presentation">
							<a href="#info" aria-controls="info" role="tab" data-toggle="tab">Info</a>
						</li>
					</ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="generate">
							<form id="newpassword" action="index.php" method="post" class="form-horizontal">
								<table class="table table-hover table-striped table-responsive">
									<tbody class="text-center">
										<tr>
											<td>Number of Words</td>

											<td>
												<select name="num" class="form-control">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
												</select>
											</td>
										</tr>

										<tr>
											<td>Include Number</td>

											<td>
												<select class="form-control" name="num_select">
													<option>Select</option>
													<option value="1">Yes, Include it.</option>
													<option value="0">No, thanks.</option>
												</select>
											</td>
										</tr>

										<tr>
											<td>Include Symbol</td>

											<td>
												<select class="form-control" name="symbol_select">
													<option>Select</option>
													<option value="1">Yes, Include it.</option>
													<option value="0">No, thanks.</option>
												</select>
											</td>
										</tr>

										<tr>
											<td>Separator</td>

											<td>
												<select class="form-control" name="separator">
													<option>Select</option>
													<option value="1">Space</option>
													<option value="2">-</option>
													<option value="3">.</option>
													<option value="4">None</option>
													<option value="5">Random</option>
												</select>
											</td>
										</tr>

										<tr>
											<td colspan="2">
												<button type="submit" name="submit" class="btn btn-success btn-lg btn-block" style="margin-bottom:5px;">Generate</button>
												<a href="http://project.ch0c0studio.net" class="btn btn-primary btn-lg btn-block">Back to Project Home</a>
												<!-- <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block"></button> -->
											</td>
										</tr>
									</tbody>
								</table>
							</form>
						</div>

						<div role="tabpanel" class="tab-pane" id="info">
							<a href="http://xkcd.com/936/">
								<img src="img/xkcd_password_strength.png" class="img-thumbnail" alt="XKCD Password Strength" />
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-3"></div>
			</div>
		</div>

		<footer>
			<p class="text-center" style="margin-top:-5px;">
				XKCD Password Generator - Powered by <a href="https://getbootstrap.com" target="_blank">Bootstrap</a> &amp; <a href="https://jquery.com" target="_blank">jQuery</a>
			</p>
		</footer>

		<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>