function CheckPassword(){
	var chk_length = document.getElementById('chk_length');
	var chk_capital = document.getElementById('chk_capital');
	var chk_small = document.getElementById('chk_small');
	var chk_number = document.getElementById('chk_number');
	var bool_length, bool_capital, bool_small, bool_number;

	var password = document.getElementById('password');
	
	if(password.value.length > 15){
		chk_length.removeAttribute('class');
		chk_length.setAttribute('class', 'valid-feedback');
		chk_length.innerHTML = "&#10004; a 15 characters long";
		bool_length = true;
		return;
	}
	if(password.value.match(/[0-9]/)){
		chk_number.removeAttribute('class');
		chk_number.setAttribute('class', 'valid-feedback');
		chk_number.innerHTML = "&#10004; numbers (0-9)";
		bool_number = true;
	}
	if(password.value.match(/[A-Z]/)){
		chk_capital.removeAttribute('class');
		chk_capital.setAttribute('class', 'valid-feedback');
		chk_capital.innerHTML = "&#10004; upper case letters (A-Z)";
		bool_capital = true;
	}
	if(password.value.match(/[a-z]/)){
		chk_small.removeAttribute('class');
		chk_small.setAttribute('class', 'valid-feedback');
		chk_small.innerHTML = "&#10004; lower case letters (a-z)";
		bool_capital = true;
	}
	if(bool_length && bool_capital && bool_small && bool_number){
		document.getElementById('btn_create').innerHTML = "Password Validated";
	}else{
		document.getElementById('btn_login').visible = true;
	}	
}

// disable form submissions if there are invalid fields
(function() {
	'use strict';
	window.addEventListener('load', function() {
	  // fetch all the forms inputs needed for validation
	  var forms = document.getElementsByClassName('needs-validation');

	  // loop over them and prevent submission
	  var validation = Array.prototype.filter.call(forms, function(form) {
		form.addEventListener('submit', function(event) {
		  if (form.checkValidity() === false) {
			event.preventDefault();
			event.stopPropagation();
		  }
		  form.classList.add('was-validated');
		}, false);
	  });
	}, false);
  })();

  //validate gender
  function validateGender() {
	var checkFemale = document.getElementById("Female");
	var checkMale = document.getElementById("Male");
	if (checkFemale.checked == true){
	  checkMale.checked = false;
	  checkMale.disabled = true;  
	} else if (checkMale.checked == true) {
	  checkFemale.checked = false;
	  checkFemale.disabled = true;
	} else {
	  checkMale.disabled = false;
	  checkFemale.disabled = false;
	}
  }
  validateGender();