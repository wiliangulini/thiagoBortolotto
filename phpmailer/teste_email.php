<?php
    include "class.phpmailer.php";

    function email($para_email, $para_nome, $assunto, $html) {
        $mail2 = new PHPMailer;
        $mail2->IsSMTP();

        $mail2->From = "wil.gulini@hotmail.com";
        $mail2->FromName = "Don Juan Burger";

        $mail2->Host = "mail.donjuanburger.com";
        $mail2->Port = 587;
        $mail2->SMTPAuth = true;
        $mail2->Username = "wil.gulini@hotmail.com";
        $mail2->Password = "#koekuatso23#";

        $mail2->AddAddress($para_email, $para_nome);

        $mail2->Subject = $assunto;

        $mail2->AltBody = "Para ver essa mensagem, use um programa compatível com HTML!";

        $mail2->MsgHTML($html);

        if ($mail2->Send()) {
            return "1";
        } else {
            return $mail2->ErrorInfo;
        }
    }

    $corpo_email = "<html><body><p>Olá este é um teste de envio de e-mail</p></body></html>";
    $controle = email("tochacannabis@gmail.com", "Wilian", "Teste de envio", $corpo_email);

    if($controle == "1") {
        echo "Envio ok";
    } else {
        echo $controle;
    }
?>