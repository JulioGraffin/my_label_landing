<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $company = $_POST["company"];
    $activity = $_POST["activity"];
    $message = $_POST["message"];
    
    $_message = "Nome: {$name} \n";
    $_message .= "Email: {$email} \n";
    $_message .= "Empresa: {$company} \n";
    $_message .= "Atividade: {$activity} \n";
    $_message .= "Mensagem: {$message} \n";
    
    mail($email, "[MEU ROTULO] Contato - {$name}", $_message);
    mail("lzerma@gmail.com", "[MEU ROTULO] Contato - {$name}", $_message);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>MeuRotulo.com - +5541 3024-8081</title>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<meta name="author" content="MeuRotulo.com">
		<meta name="description" content="MeuRotulo.com - E-commerce que trabalha com produtos de mídia, Tags, Rótulos, Etiquetas e Transfer.">
		<link rel="shortcut icon" href="assets/images/favicon.png">
		<link href="assets/css/default.css" rel="stylesheet" type="text/css">
		<link href="assets/css/colorbox.css" rel="stylesheet" type="text/css">
		
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/jquery.colorbox-min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".page-contact").colorbox();
			});
		</script>
	</head>
	<body>
		<div id="header">
			<div class="wrap">
				<h1><img src="assets/images/logo/meurotulo.png" alt="MeuRotulo.com" title="MeuRotulo.com"></h1>
				<div class="left">
					<div id="text1">
						<em>Com Você, No seu Produto, Na sua Festa, No seu Negócio</em>
					</div>
				</div>
				<div class="mid">
					<div class="right">
						<h2>Breve Loja Virtual!</h2>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="content">
			<div class="wrap">
				<div id="all-products">
					<div id="content-principal">
						<span></span>
						<img src="assets/images/bg/rotulos_etiquetas_tags_transfer.png" alt="Rótulos, Etiquetas, Tags e Transfer" title="Rótulos, Etiquetas, Tags e Transfer">
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="footer">
			<div class="wrap">
				<ul id="nav_footer">
					<li>
						<a style="cursor:default;" id="custom" href="#"> <span>Personalização</span></a>
					</li>
					<li>
						<a style="cursor:default;" id="quantities" href="#"> <span>Pequenas Quantidades</span></a>
					</li>
					<li>
						<a style="cursor:default;" id="faster" href="#"> <span>Agilidade</span></a>
					</li>
					<li>
						<a style="cursor:pointer;" id="contact" class="page-contact" href="contact.html"> <span>Contato</span> <em>Fale conosco!</em> </a>
					</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</body>
</html>
