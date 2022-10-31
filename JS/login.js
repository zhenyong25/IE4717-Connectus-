
function validateEmail() {
	var my_email = document.getElementById("account-email").value; 
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

function validatePassword(){
    var my_password = document.getElementById("account-password").value; 
	my_password.trim();
	var regexp = /"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"/;
	if(regexp.test(my_password)){
		return true; 
	}
	else{
		alert("Your password format is incorrect. It should contains minimum 8 characters & numbers");
		return false; 
	}
}

function validateContact(){
    var my_contact= document.getElementById("contact-number").value; 
	my_contact.trim();
	var regexp = /^\+65(6|8|9)\d{7}$/;
	if(regexp.test(my_contact)){
		return true; 
	}
	else{
		alert("Your contact number format is incorrect. It should starts with +65");
		return false; 
	}
}

function validateName(){
	var my_name = document.getElementById("name").value; 
	my_name.trim();
	var regexp = /^[A-za-z, .\s?]+$/;
	if(regexp.test(my_name)){
		return true; 
	}
	else{
		alert("The name you entered is not correct. Only use alphabets and space.")
		return false; 
	}
}
