<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST["nome"];https://github.com/matheusdepauli/Matheus
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Configurações de email
    $destinatario = "matheus.depauli2020@gmail.com"; // Seu endereço de email
    $assunto = "Formulário de Contato - Meu Site";
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    // Envia o email
    if (mail($destinatario, $assunto, $corpo_email)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar o email.";
    }
}
?>
