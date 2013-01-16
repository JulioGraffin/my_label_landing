$("document").ready(function() {
	
	// GALERIA ROTULOS
	$("a#rotulos").click(function() {
		$("div#galeria_rotulos").animate({
			top : '0px',
			height : '100%'
		},500);
		
	});
	
	$("a.fechar").click(function() {
		$("div#galeria_rotulos").animate({
			top : '-1200px',
			height : '100%'
		},500);
	});
	
	// GALERIA ETIQUETAS
	$("a#etiquetas").click(function() {
		$("div#galeria_etiquetas").animate({
			top : '0px',
			height : '100%'
		},500);
		
	});
	
	$("a.fechar").click(function() {
		$("div#galeria_etiquetas").animate({
			top : '-1200px',
			height : '100%'
		},500);
	});
	
	// GALERIA TAGS
	$("a#tags").click(function() {
		$("div#galeria_tags").animate({
			top : '0px',
			height : '100%'
		},500);
		
	});
	
	$("a.fechar").click(function() {
		$("div#galeria_tags").animate({
			top : '-1200px',
			height : '100%'
		},500);
	});
	
	// GALERIA TRANSFER
	$("a#transfer").click(function() {
		$("div#galeria_transfer").animate({
			top : '0px',
			height : '100%'
		},500);
		
	});
	
	$("a.fechar").click(function() {
		$("div#galeria_transfer").animate({
			top : '-1200px',
			height : '100%'
		},500);
	});
	
	// CONTACT
	$("a#contact").click(function() {
		$("div#container_contact").animate({
			top : '0px',
			height : '100%'
		},500);
		
	});
	
	$("a.fechar").click(function() {
		$("div#container_contact").animate({
			top : '-402px',
			height : '100%'
		},500);
	});
	
	
	//VALIDAÇÃO FORM
	$("#form").validate({
        rules:{
            name:{
                required: true, minlength: 2
            },
            email:{
                required: true, email: true
            },
            company:{
                required: true, email: true
            },
            activity:{
                required: true, email: true
            },
            message:{
                required: true, minlength: 2
            }
        },
        
        message:{
            name:{
                required: "Digite o seu nome",
                minlength: "O seu nome deve conter, no mínimo, 2 caracteres"
            },
            email:{
                required: "Digite o seu e-mail para contato",
                email: "Digite um e-mail válido"
            },
            message:{
                required: "Digite a sua mensagem",
                minlength: "A sua mensagem deve conter, no mínimo, 2 caracteres"
            }
        }
    });
});
