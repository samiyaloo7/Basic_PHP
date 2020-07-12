function validateReg() {
	var pass = document.getElementById("rpass").value;
	var rpass = document.getElementById("rrpass").value;
	var rbtn = document.getElementById("reg-btn");
	var cbtn = document.getElementById("cnl-btn");
	if(pass == rpass) {
		rbtn.click();
	}else {
		alert("Passwords are different");
		cbtn.click();
	}
}