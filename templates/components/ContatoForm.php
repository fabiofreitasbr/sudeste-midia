<?php
$message = "";
$colorMessage = "bg-red-700";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $telefone = trim($_POST["telefone"] ?? "");
    $mensagem = trim($_POST["mensagem"] ?? "");

    if ($nome == null || strlen($nome) < 3) {
        $message = "O nome digitado não é válido";
    } elseif ($email == null || strlen($email) < 5) {
        $message = "O e-mail digitado não é válido";
    } elseif ($telefone == null || strlen($telefone) < 7) {
        $message = "O telefone digitado não é válido";
    } elseif (!preg_match(
        '/^(([^<>()[\]

\\.,;:\s@"]+(\.[^<>()[\]

\\.,;:\s@"]+)*)|(".+"))@((

\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\]

)|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',
        strtolower($email)
    )) {
        $message = "O e-mail digitado não é válido";
    } else {
        $to = "contato@sudestemidia.com.br";
        $subject = "Sudeste Mídia - Contato Site";
        $body = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nMensagem:\n$mensagem";
        $headers = "From: Sudeste Mídia <noreply@sudestemidia.com.br>";

        if (mail($to, $subject, $body, $headers)) {
            $message = "Mensagem enviada com sucesso";
            $colorMessage = "bg-green-700";
        } else {
            $message = "Mensagem não enviada, verifique todos os campos e tente novamente";
            $colorMessage = "bg-red-700";
        }
    }

    if ($message == "") {
        $message = "HOUVE UM ERRO AO ENVIAR A MENSAGEM";
        $colorMessage = "bg-red-700";
    }
}
?>


<form method="post" action="" class="w-full">
    <div class="w-full my-8 grid grid-cols-1 lg:grid-cols-2  gap-4 md:gap-6 2xl:gap-8">
        <input
            name="nome"
            class="campo-input md:col-span-2 bg-zinc-200 text-base lg:text-lg 2xl:text-xl font-light py-3  lg:py-4 px-4 md:px-4 lg:px-5 rounded-md md:rounded-lg block w-full border lg:border-2"
            placeholder="Nome"
            required />


        <input
            name="email"
            type="email"
            class="campo-input-2 "
            placeholder="E-mail"
            required />
        <input
            name="telefone"
            class="campo-input-2"
            placeholder="Telefone"
            required />


<div class=" my-8 grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6 2xl:gap-8 w-full">



    <textarea
        name="mensagem"
        rows="4"
        class="campo-area "
        placeholder="Fale um pouco sobre o seu negócio"
        required></textarea>


    <button
        type="submit"
        class="submit-botao ">
        ENVIAR
    </button>

    </div>
    <?php if ($message != ""): ?>
        <div class="my-3 flex place-items-center gap-2 md:gap-4 bg-indigo-900 hover:bg-indigo-800 transition-all rounded-md md:rounded-xl text-white text-base md:text-3xl lg:text-2xl px-4 py-2 md:px-8 lg:px-10 lg:py-2 font-medium uppercase col-span-2 <?= $colorMessage ?>">
            <?= htmlspecialchars($message) ?>
        </div>
    <?php endif; ?>
</form>