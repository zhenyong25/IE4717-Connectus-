
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

function validateEmail(){
	var my_email = document.getElementById("email").value; 
	my_email.trim();
	var regexp = /^([\w\.-])+@([\w]+\.){1,3}([A-z]){2,3}$/;
	if(regexp.test(my_email)){
		return true;  
	}
	else{
		alert("The email you entered is not in the correct form. \n" +
		"The correct form is: " +
		"User Name @ Domain Name " );
		return false; 
	}
}

function validatecreditcard(){
	var credit_card = document.getElementById("credit_card_number").value; 
	credit_card.trim();
	var regexp_visa = /^4[0-9]{12}(?:[0-9]{3})?$/
	var regexp_mastercard = /^5[1-5][0-9]{14}$/
	var regexp_amex = /^3[47][0-9]{13}$/
	var regexp_discover = /^6(?:011|5[0-9]{2})[0-9]{12}$/
	
	if(regexp_visa.test(credit_card)){
		return true;  
	}
	if(regexp_mastercard.test(credit_card)){
		return true;  
	}
	if(regexp_amex.test(credit_card)){
		return true;  
	}
	if(regexp_discover.test(credit_card)){
		return true;  
	}
	else{
		alert("The credit card is not valid \n" +
		"Please enter a valid credit card");
		return false; 
	}
}

function validatecvv(){
	var cvv = document.getElementById("cvv").value; 
	cvv.trim();
	var regexp = /^[0-9]{3}?$/
	if(regexp.test(cvv)){
		return true;  
	}
	else{
		alert("Invalid cvv, please enter 3 number " )
		return false; 
	}
}