<?php 
    include "includes/header.php";
?>

<section class="contato">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8 col-lg-8">
                <h3>Entre em contato e faça seu orçamento</h3>
                <p>Me conta mais sobre seu projeto, quero conhecer seus sonhos!</p>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div class="info">
                    <p>Tel: (46) 99102-4100 | Email: <a href="mailto:contato@thiagobortolotto.com.br" data-type="mail" data-content="contato@thiagobortolotto.com.br" data-auto-recognition="true">contato@thiagobortolotto.com.br</a></p>
                </div>
                <form method="POST">
                    <input type="text" name="nome" placeholder="Nome..." />
                    <input type="email" name="email" placeholder="E-mail..." />
                    <input type="tel" name="tel" placeholder="Telefone..." /> 
                    <textarea placeholder="Digite sua mensagem aqui..." name="textarea"></textarea>
                    <input type="submit" name="submit" value="Enviar" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </div>
</section>
<?php

    include "phpmailer/class.phpmailer.php";

    if(isset($_POST["submit"]) && isset($_POST["nome"]) && !empty($_POST["nome"])) {

    $para_email = addslashes($_POST["email"]);
    $para_nome = addslashes($_POST["nome"]);
    $tel = addslashes($_POST["tel"]);

    function email($para_email, $para_nome, $assunto, $html) {
        $mail2 = new PHPMailer;
        $mail2->IsSMTP();

       

        $mail2->From =$_POST["email "];
        $mail2->FromName = $_POST["nome"];

        $mail2->Host = "mail.donjuanburger.com";
        $mail2->Port = 587;
        $mail2->SMTPAuth = true;
        $mail2->Username = "teste@donjuanburger.com";
        $mail2->Password = "novasenha";

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

    $corpo_email = $_POST["textarea"]."<br> <p>Tel: ".$tel;
    email("wil.gulini@hotmail.com", $para_nome, $para_email, $corpo_email);

    header("Location: index.php");
    
}
?>

<?php 
    include "includes/footer.php";
?>