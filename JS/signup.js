function email_address() {
	var my_email = document.getElementById("email-address").value; 
	my_email.trim();
	var regexp = /^([\w\.-])+@([\w]+\.){1,3}([A-z]){2,3}$/;
	if(regexp.test(my_email)){
		return true;  
	}
	else{
		alert("The email you entered is not in the correct form. \n" +
		"The correct form is: " +
		"User Name @ Domain Name ");
		return false; 
	}
}

function password(){
    var my_password = document.getElementById("password").value; 
	my_password.trim();
	var regexp = /^[A-za-z, .\s?]+$/;
	if(regexp.test(my_password)){
		return true; 
	}
	else{
		alert("Your password format is incorrect");
		return false; 
	}
}

function retype_password(){
    var my_password = document.getElementById("password").value; 
    var retype= document.getElementById("retype-password").value;

	if(retype===my_password){
		return true; 
	}
	else{
		alert("Your password does not match");
		return false; 
	}
}

function name(){
    var my_name = document.getElementById("name").value; 
	my_name.trim();
	var regexp = /^([\w\.-])+@([\w]+\.){1,3}([A-z]){2,3}$/;
	if(regexp.test(my_name)){
		return true;  
	}
	else{
		alert("The email you entered is not in the correct form. \n" +
		"The correct form is: " +
		"User Name @ Domain Name ");
		return false; 
	}
}

function contact_number(){
    var my_contact = document.getElementById("contact-number").value; 
	my_contact.trim();
	var regexp = /^([\w\.-])+@([\w]+\.){1,3}([A-z]){2,3}$/;
	if(regexp.test(my_contact)){
		return true;  
	}
	else{
		alert("The email you entered is not in the correct form. \n" +
		"The correct form is: " +
		"User Name @ Domain Name ");
		return false; 
	}
}