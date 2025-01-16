<?php
session_start();
include('C:\xampp\htdocs\php\Projetos\001 - Ecomerce\php\db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login-username'], $_POST['login-senha'])) {
        $login_username = trim($_POST['login-username']);
        $login_senha = trim($_POST['login-senha']);

        $query = "SELECT * FROM usuarios WHERE login = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $login_username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($login_senha, $user['senha'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: ../index.html");
            exit();
        } else {
            echo "<script>alert('Usuário ou senha inválidos!');</script>";
        }
    }

    if (isset($_POST['signup-username'], $_POST['signup-email'], $_POST['signup-senha'], $_POST['signup-login'], $_POST['signup-cpf'])) {
        $username = trim($_POST['signup-username']);
        $email = trim($_POST['signup-email']);
        $senha = password_hash(trim($_POST['signup-senha']), PASSWORD_DEFAULT);
        $login = trim($_POST['signup-login']);
        $cpf = trim($_POST['signup-cpf']);

        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE login = ? OR cpf = ?");
        $stmt->bind_param("ss", $login, $cpf);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('Login ou CPF já cadastrados!');</script>";
        } else {
            $stmt = $conn->prepare("INSERT INTO usuarios (username, login, email, cpf, senha) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $username, $login, $email, $cpf, $senha);

            if ($stmt->execute()) {
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "<script>alert('Erro ao cadastrar usuário.');</script>";
            }
        }
    }
}
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar | Cadastrar</title>
    <link rel="stylesheet" href="../../estilos/style.css">
    <link rel="shortcut icon" href="../../imagens/Logo_ico.ico" type="image/x-icon">
</head>

<body class="login-signup-body">
    <div class="container-login">
        <div class="titulo">
            <img src="../../imagens/usuario_icon.png" alt="imagem de um icone de usuário" class="icon">
            <input type="checkbox" class="toggle" id="login-signup">
            <label for="login-signup" class="custom-label"></label>
        </div>
        <div class="form-container">
            <div class="front">
                <form method="POST">
                    <div class="inp">
                        <label for="login-username"><img src="../../imagens/usuario_icon_black.png" alt=""
                                class="img-label"></label>
                        <input type="text" name="login-username" id="login-username" placeholder="Username"
                            autocomplete="username" required>
                    </div>
                    <div class="inp">
                        <label for="login-senha"><img src="../../imagens/cadeado_icon.png" alt=""
                                class="img-label"></label>
                        <input type="password" name="login-senha" id="login-senha" placeholder="Senha"
                            autocomplete="current-password">
                    </div>
                    <div class="esp">
                        <div class="lembrar-me">
                            <input type="checkbox" name="lembrar" id="lembrar">
                            <label for="lembrar">Lembrar-me</label>
                        </div>
                        <p class="esqueci"><a href="../index.html">Esqueci minha senha</a></p>
                    </div>
                    <div class="finalizar">
                        <button type="submit" class="logar">Logar</button>
                    </div>
                </form>
            </div>
            <div class="back" style="display: none;">
                <form method="POST">
                    <div class="inp">
                        <label for="signup-username"><img src="../../imagens/usuario_icon_black.png" alt=""
                                class="img-label"></label>
                        <input type="text" name="signup-username" id="signup-username" placeholder="Username"
                            autocomplete="username">
                    </div>
                    <div class="inp">
                        <label for="signup-login"><img src="../../imagens/usuario_icon_black.png" alt=""
                                class="img-label"></label>
                        <input type="text" name="signup-login" id="signup-login" placeholder="Login"
                            autocomplete="username">
                    </div>
                    <div class="inp">
                        <label for="signup-email"><img src="../../imagens/icon_email.png" alt=""
                                class="img-label"></label>
                        <input type="email" name="signup-email" id="signup-email" placeholder="E-mail"
                            autocomplete="email">
                    </div>
                    <div class="inp">
                        <label for="signup-cpf"><img src="../../imagens/icon_cpf.png" alt="" class="img-label"></label>
                        <input type="text" name="signup-cpf" id="signup-cpf" placeholder="CPF" autocomplete="off">
                    </div>
                    <div class="inp">
                        <label for="signup-senha"><img src="../../imagens/cadeado_icon.png" alt=""
                                class="img-label"></label>
                        <input type="password" name="signup-senha" id="signup-senha" placeholder="Senha"
                            autocomplete="new-password">
                    </div>
                    <div class="finalizar">
                        <button type="submit" class="cadastrar">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="alerta-modal" class="alerta-modal">
        <div class="alerta-content">
            <p>Por favor, preencha os campos obrigatórios:</p>
            <ul id="lista-erros"></ul> <!-- Lista de mensagens de erro -->
            <button onclick="fecharModal()">Fechar</button>
        </div>
    </div>
    <script src="../../js/entrar-cadastrar.js"></script>
</body>

</html>