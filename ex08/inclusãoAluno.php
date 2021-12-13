<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Incluir Aluno</title>
</head>
<body>
    <a href="ex08_listar_aluno.php">Listar Aluno</a><br>
    <a href="ex08_incluir_aluno.php">Incluir Aluno</a><br>
    <a href="ex08_alterar_aluno.php">Alterar Aluno</a><br>

    <h1>Inserir Aluno</h1>
    <?php
    if($sucesso) echo "Inserido com sucesso fera";
    ?>
    <form action="" method="post">
    Nome: <input type="text" name="nome" id=""><br>
    E-mail: <input type="text" name="email" id=""><br>
    CPF: <input type="text" name="cpf" id=""><br>
    Matrícula: <input type="text" name="matricula" id=""><br>
    <input type="submit" value="Inserir">
    </form>

    <?php
    $ehPost = false;
    $nome = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $matricula = $_POST["matricula"];
        
        $dbLocation = "125.1.0.3";
        $dbUser = "jpof";
        $dbPass = "abc1234";
        $db = "3DAW";

        $sucesso = true;
        
        try {
            $conn = new mysqli($dbLocation , $dbUser, $dbPass, $db);
            try {
                $sql = "insert into Alunos(nome, email, cpf, matricula) values('$nome', '$email', '$cpf', '$matricula')";
                $resultado = $conn->query($sql);
            } catch (Exception $e) {
                $sucesso = false;
                echo "Erro ao inserir aluno<br>" . $e;
                
            }
            echo "Inserido com sucesso";
        } catch ( Exception $e) {
            $sucesso = false;
            echo "Conexão Falhou<br>" . $e;
        } finally {
            die();
        }
    }
    ?>
</body>
</html>