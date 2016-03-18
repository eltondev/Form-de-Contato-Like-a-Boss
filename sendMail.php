<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

     if(isset($_POST)){
			class Email {
					public $nome = "";
                    public $ddd = "";
                    public $telefone = "";
                    public $op = "";
                    public $funcao = "";
                    public $email = "";
                    public $endereco = "";
                    public $estado = "";
                    public $cidade = "";
                    public $mensagem = "";
                    public $verifica = "";
                    public $destinatario = "";
                    public $msg = "";
                    public $headers = "";
                    public $mail="";
                    public $assunto = "";
	    
		function __construct() {
			
		$this->nome       = $_POST["nome"];
		$this->ddd        = $_POST["ddd"];
		$this->funcao     = $_POST["funcao"];
		$this->telefone   = $_POST["telefone"];
		$this->operadora  = $_POST["operadora"];
		$this->email      = $_POST["email"];
		$this->endereco   = $_POST["endereco"];
		$this->estado     = $_POST["estado"];
		$this->cidade     = $_POST["cidade"];
		$this->assunto    = $_POST["assunto"];
		$this->mensagem   = $_POST["mensagem"];
		$this->verifica   ="^[a-z A-Z 0-9 _ - .]+[@]+[a-z A-Z 0-9 _ - .]+[.]+[a-z A-Z 0-9 _ - .]^";
 
		if (empty($this->nome)) {
			echo "<div id='erro'>Por favor, nos diga seu nome!</div>";

		}
		elseif (empty($this->ddd)) {
				echo "<div id='erro'>Por favor, nos diga seu DDD!</div>";
		}
		elseif (empty($this->telefone)) {
				echo "<div id='erro'><strong>Por favor, nos diga seu Telefone!</div>";

		}
		elseif (empty($this->operadora)) {
				echo "<div id='erro'><strong>Por favor, nos diga sua operadora!</div>";

		}
		elseif (empty($this->funcao)) {
				echo "<div id='erro'><strong>Por favor, nos diga o que você é!</div>";

		}
		elseif (!preg_match($this->verifica,$this->email)){
				echo "<div id='erro'>Atenção insira um e-mail válido!</div>";

		}
		elseif (empty($this->endereco)) {
				echo "<div id='erro'>Por favor, nos diga seu Endereço!</div>";

		}
		elseif (empty($this->estado)) {
				echo "<div id='erro'>Por favor, nos diga seu Estado!</div>";
		}
		elseif (empty($this->cidade)) {
				echo "<div id='erro'>Por favor, nos diga sua Cidade</div>";

		}

		elseif (empty($this->assunto)) {
				echo "<div id='erro'>Por favor, nos diga o assunto de seu contato!</div>";

		}

		elseif (empty($this->mensagem)) {
				echo "<div id='erro'>Por favor, nos informe sua Mensagem!</div>";

		}else {
				$this->destinatario="eltondeveloper@gmail.com";
			    $this->msg="
				<table align='center' width='600' border='0' bordercolor='#06C' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#999;'>
			    <tr>
				<th colspan='3' bgcolor='#06C' style='padding:10px; color:#ffffff; font-family:Verdana, Geneva, sans-serif;'>Formul&aacute;rio de Contato - Seu Site</th>
				</tr>
				<tr>
				<td width='114' bgcolor='#f2f2f2' style='padding:10px;'>Nome:</td>
				<td width='270' bgcolor='#f2f2f2' style='padding:10px;'>$this->nome</td>
				</tr>
				<tr>
				<td bgcolor='#f2f2f2' style='padding:10px;'>Telefone:</td>
				<td bgcolor='#f2f2f2' style='padding:10px;'>$this->ddd -  $this->telefone</td>
				<tr>
				<tr>
				<td bgcolor='#f2f2f2' style='padding:10px;'>Operadora:</td>
				<td bgcolor='#f2f2f2' style='padding:10px;'>$this->operadora</td>
				<tr>
				<td bgcolor='#f2f2f2' style='padding:10px;'>Ele é:</td>
				<td bgcolor='#f2f2f2' style='padding:10px;'>$this->funcao</td>
				</tr>
				</tr>
				<tr>
				<td bgcolor='#f2f2f2' style='padding:10px;'>E-mail:</td>
				<td bgcolor='#f2f2f2' style='padding:10px;'>$this->email</td>
				</tr>
				<tr>
				<td width='114' bgcolor='#f2f2f2' style='padding:10px;'>Endere&ccedil;o:</td>
				<td width='270' bgcolor='#f2f2f2' style='padding:10px;'>$this->endereco</td>
				</tr>
				<tr>
				<td width='114' bgcolor='#f2f2f2' style='padding:10px;'>Cidade:</td>
				<td width='270' bgcolor='#f2f2f2' style='padding:10px;'>$this->cidade / $this->estado</td>
				</tr>
				<tr>
				<td width='114' bgcolor='#f2f2f2' style='padding:10px;'>Assunto:</td>
				<td width='270' bgcolor='#f2f2f2' style='padding:10px;'>$this->assunto</td>
				</tr>
				<tr>
				<td width='114' bgcolor='#f2f2f2' style='padding:10px;'>Mensagem:</td>
				<td width='270' bgcolor='#f2f2f2' style='padding:10px;'>$this->mensagem</td>
				</tr>
				<tr>
				<th colspan='3' bgcolor='#06c' style='padding:10px; color:#f2f2f2; font-family:Verdana, Geneva, sans-serif;'>Email enviado via formul&aacute;rio de contato</th>
				</tr>
				</table>
				";
				
				$this->headers         = "From:<$this->email>\n"; 
				$this->headers        .= "Content-type: text/html; charset=UTF-8\n";
				$this->headers        .= "MIME-Version: 1.0\n";

				$this->mail =  mail($this->destinatario,$this->assunto,$this->msg,$this->headers);

					if ($this->mail) {

						echo"<div id='sucesso'><strong>".$this->nome."</strong> Sua mensagem enviada com sucesso! <br> Entraremos em contato em breve.</div>";

				}else{

					  echo  "<div id='erro'> <strong>".$this->nome."</strong> Ouve um erro ao ser processado seu contato<br>
                      tente novamente em alguns segundos, ou entre em contato<br>
					  via telefone 00 0000 0000.</div>";

                }

            }

        }
    }
   
     $Email = new Email();
    
	}
?>