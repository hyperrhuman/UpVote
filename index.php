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
			<li id="userDetails"><a href=""><img id="userAvatar" src="images/icons/icon-google.png"><b>Abhishek</b></a></li>
			<li><a href="sass.html">Upvotes</a></li>
			<li><a href="badges.html">About</a></li>
			<li><a href="collapsible.html">Contact Us</a></li>
			<li><a href="mobile.html">Logout</a></li>
		</ul>
		<div class="container">
			<div class="wrapper">
				<div class="plus__button_wrapper center">
					<button class="plus__button" onclick="showform()">
						<span class="fa-stack fa__plus_icon fa-5x">
						  <i class="fas fa-circle fa-stack-2x" style="color:#ee6e73"></i>
						  <i class="fas fa-plus fa-stack-1x" style="color: white" ></i>
						</span>
					</button>
				</div>
				<div id="displayForm" class="form__wrapper z-depth-3">
					<p>Give Upvotes</p>
					<div class="form">
						<div class="form__input">
							<label for="userName">User Name : </label>
							<select class="browser-default form__input_select" id="userName">
							  <!-- <option value="volvo">Volvo</option>
							  <option value="saab">Saab</option>
							  <option value="opel">Opel</option>
							  <option value="audi">Audi</option> -->
							</select>
						</div>
						<div class="form__input" style="display: grid;">
							<label for="upvotes" style="grid-column: 1/2;">Upvotes :</label>
							<span style="grid-column: 2/3;display: flex;align-items: center;justify-content: center;">
								<button style="background:transparent;border:none;"><i class="fas fa-plus-circle fa-2x"></i></button>
								<input type="text" name="Comment" placeholder="Upvotes" id="upvotes" class="browser-default" style="max-width: 50px;height: 30px;text-align: center;font-size: 16px;border: 1px solid #ccc;border-radius: 5px;" value="0">
								<button style="background:transparent;border:none;"><i class="fas fa-minus-circle fa-2x"></i></button>
							</span>
						</div>
						<div class="form__input">
							<label for="comment">Add a Comment :</label>
							<!-- <input type="text" name="Comment" placeholder="Add a message for Upvote :" id="comment" class="browser-default" placeholder="Add a message for Upvote :" > -->
							<textarea rows="2" cols="50" class="browser-default form__input_textarea" placeholder="Add a message for Upvote :" id="comment" >
							
							</textarea> 
						</div>
						<div class="center">
							<button class="btn" style="background-color: #1e57df;margin-top:5%;" onclick="addUpvote()">
								Submit
							</button>
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
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400&display=swap" rel="stylesheet">
				<!-- The core Firebase JS SDK is always required and must be listed first -->
		<script src="https://www.gstatic.com/firebasejs/7.0.0/firebase-app.js"></script>
		<!-- TODO: Add SDKs for Firebase products that you want to use
		     https://firebase.google.com/docs/web/setup#available-libraries -->
		<script src="https://www.gstatic.com/firebasejs/7.0.0/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.0.0/firebase-database.js"></script>
	    <script src="js/firebaseActions.js"></script> 
		<script language="javascript" type="text/javascript">
			$(document).ready(function(){
				$('.sidenav').sidenav();
				displayUserAvatar();
				readData();
			});
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