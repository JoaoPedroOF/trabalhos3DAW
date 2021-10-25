<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulário do Aluno</title>
</head>

<body>
<h1>Formulário FAETERJ-Rio<h1>
<?php
    $post = true;
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["Aluno"];
        $email = $_POST["E-mail"];
        $idade = $_POST["Idade"];
        $matr = $_POST["Matrícula"];
        $turno = $_POST["Turno"];
    } else {
        $post = false;
    }

?>


<h2><?php if ($post) {echo "Os dados do aluno $nome são:";} ?></h2>

<h3><?php if ($post) {echo "E-mail: $email";} ?></h3>
<h3><?php if ($post) {echo "Idade: $idade";} ?></h3>
<h3><?php if ($post) {echo "Matrícula: $matr";} ?></h3>
<h3><?php if ($post) {echo "Turno: $turno";} ?></h3>

<h2><?php if ($post) {echo "Preencha com os dados do próximo aluno:";} ?></h2>

<form action="Trab_ex03_If.php" method="POST">
    
    Nome:   <input type="text" name="Aluno">
    <br>
    E-mail: <input type="text" name="E-mail">
    <br>
    Idade:  <input type="text" name="Idade">
    <br>
    Matrícula:  <input type="text" name="Matrícula">
    <br>
    Turno:  <input type="text"  name="Turno">
    <br>
    <br> 
    <input type="submit" value="enviar">

</form>

</body>

</html>


