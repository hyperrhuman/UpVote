<?php 
?> 
<html>
	<head>
		<title>PHP Test</title>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<!-- Compiled and minified CSS -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	    <!-- Compiled and minified JavaScript -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link href="css/index.css" rel="stylesheet">
	    <script src="https://kit.fontawesome.com/c73eeac0ae.js" crossorigin="anonymous"></script>
	    <script src="js/index.js"></script> 
	</head>
	<body>
		<!-- <div class="overlay">
		</div> -->
		<nav>
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo">Upvote</a>
				<a href="#" data-target="mobile-demo" class="sidenav-trigger">
					<i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="sass.html">Upvotes</a></li>
					<li><a href="badges.html">About</a></li>
					<li><a href="collapsible.html">Contact Us</a></li>
					<li><a href="mobile.html">Logout</a></li>
				</ul>
			</div>
		</nav>
		<ul class="sidenav" id="mobile-demo">
			<li><a href="sass.html">Upvotes</a></li>
			<li><a href="badges.html">About</a></li>
			<li><a href="collapsible.html">Contact Us</a></li>
			<li><a href="mobile.html">Logout</a></li>
		</ul>
		<div class="container">
			<div class="wrapper">
				<div class="plus__button_wrapper center">
					<button class="plus__button" onclick="showform()">
						<span class="fa-stack fa-5x">
						  <i class="fas fa-circle fa-stack-2x" style="color:#ee6e73"></i>
						  <i class="fas fa-plus fa-stack-1x" style="color: white" ></i>
						</span>
					</button>
				</div>
				<div id="displayForm" class="form__wrapper">
					<div class="form">
						<div class="form__input">
							<label for="userName">User Name : </label>
							<input type="text" name="Comment" placeholder="User Name" id="userName" class="browser-default">
						</div>
						<div class="form__input" style="display: grid;">
							<label for="upvotes" style="grid-column: 1/2;">Upvotes :</label>
							<input type="text" name="Comment" placeholder="Upvotes" id="upvotes" class="browser-default" style="grid-column: 2/3;max-width: 50px;" value="0">
							<div style="grid-column: 3/4;display: flex;">
								<div class="inc button">+</div>
								<div class="dec button">-</div>
							</div>
						</div>
						<div class="form__input">
							<label for="comment">Add a Comment :</label>
							<input type="text" name="Comment" placeholder="Add a message for Upvote :" id="comment" class="browser-default">
						</div>
					</div>
				</div>
				<div class="list center">
					<div class="list__header">
						<span>
							<p class="list__header_text">Recent Upvotes</p>
						</span>
					</div>
					<div class="list__wrapper">
						<div class="list__element">
							<div class="list__icon">
								<p class="icon__text center">+5</p>
							</div>
							<div class="list__content">
								<p class="content__text">Really good effort jfkqegfigef uvbefguieugfef uiefgieguf ugiefgieufie eufgiuegfief eufiguef</p>
							</div>
							<div class="list__actions">
								<a><i class="far fa-thumbs-up list__action"></i></a>
								<!-- <a><i class="fas fa-edit list__action"></i></a> -->
								<a><i class="fas fa-share-alt list__action"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script language="javascript" type="text/javascript">
			<!--

			$(document).ready(function(){
				$('.sidenav').sidenav();
			});
			//-->
			
			function showform() {
				if ($("#displayForm").hasClass("form__wrapper-visible")) {
		            $("#displayForm").removeClass("form__wrapper-visible");
		        } else {
		            $("#displayForm").addClass("form__wrapper-visible");
		        }
			}
		</script>
	</body>
</html>