<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    // Configurações para enviar o e-mail
    $destinatario = "georgecampos1997@gmail.com";
    $assunto = "Nova mensagem do formulário de contato";

    // Constrói o corpo do e-mail
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Celular: $celular\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    // Envia o e-mail
    mail($destinatario, $assunto, $corpo_email);

    // Redireciona de volta para o formulário
    header('Location: index.html');
    exit;
}
