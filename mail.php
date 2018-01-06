<?php

	function pegaValor($valor) {
	    return isset($_POST[$valor]) ? $_POST[$valor] : '';
	}

	function validaEmail($email) {
	    return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

	function enviaEmail($emailsender, $emaildestinatario, $assunto, $mensagem) {
		$headers = "MIME-Version: 1.1" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: ".$emailsender."\r\n";
		$headers .= "Return-Path: ".$emailsender."\r\n";

		mail($emaildestinatario, $assunto, $mensagem, $headers, "-r".$emailsender);
	}

	$emailsender = "contato.site@hpdrywall.com.br";
	$nomeremetente = pegaValor("txtContatoNome");
	$emailremetente = pegaValor("txtContatoEmail");
	$emaildestinatario = "hpservicosemanutencao@gmail.com";
	$teldestinatario = pegaValor("txtContatoTel");
	$assunto = pegaValor("txtContatoAssunto");
	$mensagemForm = pegaValor("txtContatoMsg");

	$mensagem = "<h1>Contato Site</h1>";
  $mensagem .= "<p>Nome: ".$nomeremetente."</p>";
  $mensagem .= "<p>Email: ".$emailremetente."</p>";
  $mensagem .= "<p>Tel: ".$teldestinatario."</p>";
  $mensagem .= "<p><b><i>".$mensagemForm."</i></b></p>";

	//print "Mensagem enviada com sucesso !";

	if ($nomeremetente && $emaildestinatario && validaEmail($emaildestinatario) && $mensagemForm) {
	    enviaEmail($emailsender, $emaildestinatario, $assunto, $mensagem);
	    $pagina = "mail_ok.php";
	} else {
	    $pagina = "mail_error.php";
	}

	header("location:$pagina");
?>