<?php

namespace Repositories;

require __DIR__ . '/../config/config.php';
use Repositories\ContatosRepository;
$contatos = ContatosRepository::getContatos();

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Accept, X-Requested-With, Cache-Control, Authorization, Origin');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$telefone = filter_input(INPUT_POST, 'wpp', FILTER_SANITIZE_SPECIAL_CHARS);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);


$emailAdmin = $contatos['email_contato_site'];

$user = $_ENV['EMAIL'];
$senha = $_ENV['SENHA'];
$host = "smtp.zoho.com";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$respostaSuccess = [
    "success" => true,
    "message" => "E-mail enviado!"
];

$respostaError = [
    "success" => false,
    "message" => "E-mail não enviado!"
];

//enviar email
$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->isSMTP();
    $mail->Host = $host;
    $mail->SMTPAuth = true;
    $mail->Username = $user;
    $mail->Password = $senha;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Configuração da codificação de caracteres
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    // Destinatários
    $mail->setFrom($user, 'Freeladev Sites');
    $mail->addAddress($emailAdmin, 'Administrador Freeladev');
    $mail->addReplyTo($user, 'Freeladev Sites');

    // Cabeçalhos adicionais
    $mail->addCustomHeader('X-Mailer', 'PHP/' . phpversion());
    $mail->addCustomHeader('Precedence', 'bulk');

    // Conteúdo
    $mail->isHTML(true);
    $mail->Subject = 'Novo contato do site!';
    $mail->Body = '
        <h2>Dados do contato:</h2>
        <p style="margin-top:-5px; color: black;">Nome: ' . $nome . '</p>
        <p style="margin-top:-5px; color: black;">E-mail: ' . $email . '</p>
        <p style="margin-top:-5px; color: black;">Telefone: ' . $telefone . '</p>
        <p style="margin-top:-5px; color: black;">Mensagem: ' . $mensagem . '</p>
    ';
    $mail->AltBody = 'Nome: ' . $nome . "\n" .
                     'E-mail: ' . $email . "\n" .
                     'Telefone: ' . $telefone . "\n" .
                     'Mensagem: ' . $mensagem;

    $mail->send();

    header('Location: ../../index.html');

} catch (Exception $e) {
    header('Location: ../../index.html');
}