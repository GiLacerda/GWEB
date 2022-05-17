<?php
// Inicialize a sessão
session_start();

// Verifique se o usuário já está logado, em caso afirmativo, redirecione-o para a página de boas-vindas
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

// Incluir arquivo de configuração
require_once "config.php";

// Defina variáveis e inicialize com valores vazios
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processando dados do formulário quando o formulário é enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifique se o nome de usuário está vazio
    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor, insira o nome de usuário.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Verifique se a senha está vazia
    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor, insira sua senha.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validar credenciais
    if (empty($username_err) && empty($password_err)) {
        // Prepare uma declaração selecionada
        $sql = "SELECT id, username, password FROM users WHERE username = :username";

        if ($stmt = $pdo->prepare($sql)) {
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            // Definir parâmetros
            $param_username = trim($_POST["username"]);

            // Tente executar a declaração preparada
            if ($stmt->execute()) {
                // Verifique se o nome de usuário existe, se sim, verifique a senha
                if ($stmt->rowCount() > 0) {
                    if ($row = $stmt->fetch()) {
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if (password_verify($password, $hashed_password)) {
                            // A senha está correta, então inicie uma nova sessão
                            session_start();

                            // Armazene dados em variáveis de sessão
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirecionar o usuário para a página de boas-vindas
                            header("location: index.php");
                        } else {
                            // A senha não é válida, exibe uma mensagem de erro genérica
                            $login_err = "Nome de usuário ou senha inválidos.";
                            echo  "<script>alert('".$login_err."');</script>";
                        }
                    }
                } else {
                    // O nome de usuário não existe, exibe uma mensagem de erro genérica
                    $login_err = "Nome de usuário ou senha inválidos.";
                    echo  "<script>alert('".$login_err."');</script>";
                }
            } else {
                echo  "<script>alert('".$login_err."');</script>";
            }
            // Fechar declaração
            unset($stmt);
        }
    }
    // Fechar conexão
    unset($pdo);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<?php
include "./head.php";
?>

<body>
    <div class="fundo">
        <div class="frente">
            <div class="login">
                <h2>Login </h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="username" class="form-input" placeholder="Username">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-input" placeholder="Password">
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btnLogin" value="Login">Login</button>
                    </div>
                </form>
                <p class="pRegister">Ainda não tem uma conta? <a class="aRegister" href="./register.php">Clique aqui para se registrar</a></p>
            </div>

        </div>
    </div>
</body>

</html>