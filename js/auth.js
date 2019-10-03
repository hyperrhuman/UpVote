function googleLogin() {
	console.log("hello");
	// instance of the Google provider object: 
	var provider = new firebase.auth.GoogleAuthProvider();
	// OAuth 2.0 scope
	provider.addScope('https://www.googleapis.com/auth/contacts.readonly');
	firebase.auth().useDeviceLanguage();
	firebase.auth().signInWithRedirect(provider);
	//Getting the login parameters
	var userData = null;
	firebase.auth().getRedirectResult().then(function(result) {
	  if (result.credential) {
	    // This gives you a Google Access Token. You can use it to access the Google API.
	    var token = result.credential.accessToken;
	    // ...
	  }
	  // The signed-in user info.
	 var userData  = result.user;
	}).catch(function(error) {
	  // Handle Errors here.
	  var errorCode = error.code;
	  var errorMessage = error.message;
	  // The email of the user's account used.
	  var email = error.email;
	  // The firebase.auth.AuthCredential type that was used.
	  var credential = error.credential;
	  // ...
	  return -1;
	});
	firebase.auth().onAuthStateChanged(user => {
	  if(user) {
	    window.location = 'index.php'; //After successful login, user will be redirected to home.html
	  }
	});
}


