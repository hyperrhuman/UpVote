window.currentUser = {};

var firebaseConfig = {
    apiKey: "AIzaSyCf6X60l8_0SPrnS_0lyy7WL2g_JRykf4U",
    authDomain: "credvote.firebaseapp.com",
    databaseURL: "https://credvote.firebaseio.com",
    projectId: "credvote",
    storageBucket: "",
    messagingSenderId: "283808575178",
    appId: "1:283808575178:web:de017152879c9dfc1b0e33",
    measurementId: "G-CL8FSPW9GN"
};
		  // Initialize Firebase
firebase.initializeApp(firebaseConfig);
function googleLogin() {
	console.log("hello");
	// instance of the Google provider object: 
	var provider = new firebase.auth.GoogleAuthProvider();
	// OAuth 2.0 scope
	provider.addScope('https://www.googleapis.com/auth/contacts.readonly');
	firebase.auth().useDeviceLanguage();
	firebase.auth().signInWithRedirect(provider);
	//Getting the login parameters
	var userData2 = null;
	firebase.auth().getRedirectResult().then(function(result) {
	  if (result.credential) {
	    // This gives you a Google Access Token. You can use it to access the Google API.
	    var token = result.credential.accessToken;
	    // ...
	  }
	  // The signed-in user info.
	 var userData2  = result.user;
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
	let self = this;
	firebase.auth().onAuthStateChanged(user => {
	  if(user) {
	  	console.log(user);
	  	self.currentUser.name = user['displayName'];
	  	self.currentUser.imageUrl = user['photoURL'];
	  	console.log(user['displayName']);
	  	setCurrentUser(user);
	  }
	  if(window.currentUser.name){

		window.location = 'home.php'; //After successful login, user will be redirected to home.html
		window.currentUser = window.currentUser.name ;
	  }
	});
}
function setCurrentUser(user) {
	console.log(user);
	window.currentUser.name = user.displayName;
}
let userData = [];
function readData(){
	var database = firebase.database();
	return database.ref('/users').once('value').then(function(users) {
		for(var user in users.val()) {
			console.log(user);
			// console.log(Object.keys(users.val()));
	  		userData.push(users.val()[user]);
		}
		populateDropDown(userData);
	});
}
function populateDropDown(userData) {
	let select = document.getElementById("userName");
	for(var user in userData) {
		option = document.createElement( 'option' );
	    option.value = option.text = userData[user].name+"("+userData[user].upvotes+")";
	    select.add( option );
	}
}
function displayUserAvatar() {
	// var user = firebase.auth().currentUser;
	if (window.currentUser.name) {
	// User is signed in.
		console.log(window.currentUser.name);

	} else {
	// No user is signed in.
		console.log("no user");
	}

}


