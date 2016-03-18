// JavaScript Document
$(document).ready(function() {
$("#formulario").submit(function() {
	var nome        =   $("#nome").val();
	var ddd         =   $("#ddd").val();
	var telefone    =   $("#telefone").val();
	var operadora   =   $("#operadora").val();
	var funcao      =   $("#funcao").val();
	var email       =   $("#email").val();
	var endereco    =   $("#endereco").val();
	var estado      =   $("#estado").val();
	var cidade      =   $("#cidade").val();
	var assunto     =   $("#assunto").val();
	var mensagem    =   $("#mensagem").val();
    $.post('sendMail.php', {nome:nome, ddd:ddd, telefone:telefone, operadora:operadora, funcao:funcao, email:email, endereco:endereco, estado:estado, cidade:cidade, assunto:assunto, mensagem:mensagem }, function(resposta) {
		$("#aviso").fadeIn(2000);
		$("#aviso").fadeOut(10000);
    if (resposta != false) {
	$("#aviso").html(resposta);
	}else {
	$("#loading").fadeIn(2000);
	$("#loading").fadeOut(10000);
	$("#loading").html("<img src='loading.gif' alt='processando dados' />");
	$("#aviso").css("color","green");
	$("#aviso").html("Mensagem enviada com sucesso!");
		$("#nome").val("");
		$("#ddd").val("");
		$("#telefone").val("");
		$().val("#operadora");
		$() .val("#funcao");
		$("#email").val("");
		$("#endereco").val("");
		$("#estado").val("");
		$("#cidade").val("");
		$("#assunto").val("");
		$("#mensagem").val("");
             }
		});
	});
});

		
	window.onload = function() {
		new dgCidadesEstados(
            document.getElementById('estado'),
            document.getElementById('cidade'),
        true
      );
    }
