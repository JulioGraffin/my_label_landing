$("document").ready(init);

function init() {
	$("#form").bind("submit", function(){
		return doValidate();
	});
}

function doValidate() {
	nameVal = $("#name").val();
	emailVal = $("#email").val();
	companyVal = $("#company").val();
	activityVal = $("#activity").val();
	messageVal = $("#message").val();
	
	if(nameVal == "" || emailVal == "" || companyVal == "" || activityVal == "" || messageVal == "") {
		alert("Existem campos vázios.");
		return false;
	}
	else {
		if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailVal))) {
			alert("É necessário o preenchimento de um endereço de e-mail válido.");
			return false;
		}
		else {
			return true;
		}
	}
}