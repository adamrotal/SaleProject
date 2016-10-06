function countPrice() {
	var price = document.getElementById('initialPrice').value;
	var nBuy = document.getElementById('quantity').value;
	var total = parseInt(nBuy * price);

	document.getElementById('totalPrice').innerHTML = total.toLocaleString();
}

function validationPurchase(event) {
	event.preventDefault();
	var modal = document.getElementById('myModal');
	//var btn = document.getElementById("btnConfirm");
	var spanYes = document.getElementsByClassName("btnYesModal")[0];
	var spanNo = document.getElementsByClassName("btnNoModal")[0];

    modal.style.display = "block";

	spanNo.onclick = function() {
	    modal.style.display = "none";
	}

	spanYes.onclick = function() {
		document.getElementById("myFormConfirmation_Purchase").submit();
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
}

function validationCreditCard() {
	var reg = /^[0-9]{12}$/;
	var id = document.getElementById('credit').value;
  	var checking = reg.test(id); 

	if(checking){
		var tooltip = document.getElementById('creditCardTooltip');
		tooltip.className = "tooltip";
	}else{
		var tooltip = document.getElementById('creditCardTooltip');
		tooltip.className += " visibleTooltip";
	}
}

function validationVerification() {
	var reg = /^[0-9]{3}$/;
	var id = document.getElementById('verification').value;
  	var checking = reg.test(id); 

	if(checking){
		var tooltip = document.getElementById('digitCardTooltip');
		tooltip.className = "tooltip";
	}else{
		var tooltip = document.getElementById('digitCardTooltip');
		tooltip.className += " visibleTooltip";
	}
}

function validationDataDigit(event) {
	event.preventDefault();
	var regCreditCard = /^[0-9]{12}$/;
	var idCreditCard = document.getElementById('credit').value;
  	var checkingCreditCard = regCreditCard.test(idCreditCard);

  	var regCardVerif = /^[0-9]{3}$/;
	var idCardVerif = document.getElementById('verification').value;
  	var checkingCardVerif = regCardVerif.test(idCardVerif);

  	if(checkingCreditCard && checkingCardVerif) {
  		validationPurchase(event);
  	} else if (checkingCreditCard && !checkingCardVerif) {
  		validationCreditCard();
  	} else if (!checkingCreditCard && checkingCardVerif) {
  		validationVerification();
  	} else {
  		validationCreditCard();
  		validationVerification();
  	}
}

function validationLogin(event) {
	event.preventDefault();
	var emailUsername = document.loginForm.email;
	var pass = document.loginForm.password;
	
	if (emailUsername.value == "") {
		var tooltip = document.getElementById('requiredLoginEmail');
		tooltip.className += " visibleTooltip";
	}

	if (pass.value == "") {
		var tooltip = document.getElementById('requiredLoginPassword');
		tooltip.className += " visibleTooltip";
	}
}

function loginValid() {
	var emailUsername = document.loginForm.email;
	var pass = document.loginForm.password;
	
	if (emailUsername.value == "") {
		var tooltip = document.getElementById('requiredLoginEmail');
		tooltip.className += " visibleTooltip";
	} else {
		var tooltip = document.getElementById('requiredLoginEmail');
		tooltip.className = "tooltip";
	}

	if (pass.value == "") {
		var tooltip = document.getElementById('requiredLoginPassword');
		tooltip.className += " visibleTooltip";
	} else {
		var tooltip = document.getElementById('requiredLoginPassword');
		tooltip.className = "tooltip";
	}

	if (emailUsername.value != "" && pass.value != "") {
		document.getElementById("myFormLogin").submit();
	}
}