<?php

if(isset($_POST['enviar'])) {
    // Dados 
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];
    $identidade = $_POST["identidade"];

    $to = "gabduarte113@gmail.com"; 
    $subject = "Formulário de Contato"; 

    // Corpo 
    $message = "Nome: $nome\n";
    $message .= "Email: $email\n";
    $message .= "Telefone: $telefone\n";
    $message .= "Identidade: $identidade\n";
    $message .= "Mensagem: $mensagem\n";

    // Cabeçalhos 
    $headers = "From: $nome <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    $info = mail($to, $subject, $message, $headers);
    
    if ($info) {
        echo "<span style='font-size: 1.5rem; font-weight: bold; color: green;'>Seu e-mail foi enviado com sucesso!</span>";
    } else {
        echo "<span style='font-size: 1.5rem; font-weight: bold; color: red;'>Ocorreu um erro ao enviar o e-mail.</span>";
    }
}

?>