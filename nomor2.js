
function is_email_valid(email){
	let isValid = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,})$/.test(email)
 	return isValid
}

function is_phone_valid(phoneNumber){
  	let isValid = /^([+][62]{2})([0-9]{8,15})$/.test(phoneNumber)
    return isValid
}

function is_username_valid(username){
  	let isValid = /^([a-z]{5,9})$/.test(username)
    return isValid
}

function is_password_valid(password){
  	let isValid = /^(?=.*[$&+,:;=?@#|'<>.^*()%!-])(?=.*[#])([a-zA-Z0-9\d#\d$&+,:;=?@#|'<>.^*()%!-]{8,})$/.test(password)
    return isValid
}

