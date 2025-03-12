<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/home.css">
</head>

<body>
    <a href="../auth/sair.php">Sair</a>
    <?= $_SESSION["user"] ?>

    <form action="../database/cadastrar_task.php" method="post">
        <label for="title">Título</label>
        <input type="text" name="title" id="title" id="edita_title">
        <label for="descripton">Descrição</label>
        <input type="text" name="description" id="description" id="edita_description">
        <button type="submit">Cadastrar</button>
    </form>

    <div class="container">
        <?php
        include("../database/conexao.php");
        $id = $_SESSION["id"];
        $sqlTask = "SELECT id, title, description, completed, created_at FROM tasks WHERE user_id = ?";
        $stmt = $conexao->prepare($sqlTask);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($row = $resultado->fetch_assoc()) {
            $task_id = $row["id"];
            $title = $row["title"];
            $description = $row["description"];
            $completed = $row["completed"];
            $create_at = $row["created_at"];
            echo "
                <div class='container-task'>
        <p>" . $title . "</p>
        <p>" . $description . "</p>
        <p>" . $completed . "</p>
        <p>" . $create_at . "</p>
        <form action='../database/editar_task.php' method='post'>
            <input type='hidden' name='id' value='$task_id'>
            <button type='submit' id='btn-edita'><i class='fa-solid fa-pen'></i></button>
        </form>
        <form action='../database/deletar_task.php' method='post'>
            <input type='hidden' name='id' value='$task_id'>
            <button type='submit'><i class='fa-solid fa-trash-can'></i></button>
        </form>
    </div>
        
            ";
        }
        ?>
    </div>
</body>

<script>
    const inputTitleTask = document.getElementById("title");
    const inputDescriptionTask = document.getElementById("description");
    const inputEditaTitleTask = document.getElementById("edita_title");
    const inputEditaDescriptionTask = document.getElementById("edita_description");

    document.getElementById('btn-edita').addEventListener('click', function() {
        var textTitle = inputTitleTask.value;
        var textDescription = inputDescriptionTask.value;

        console.log(textTitle);
        console.log(textDescription);

        inputEditaTitleTask.value = value(textTitle);
        inputEditaDescriptionTask.value = value(textDescription);
    });
</script>

<?php

// Verifique se há uma mensagem de erro na sessão
if (isset($_SESSION['resposta'])) {
    // Exiba a mensagem de erro
    echo "<p style='color: red;'>" . $_SESSION['resposta'] . "</p>";

    // Remova a mensagem de erro da sessão para que não seja exibida novamente
    unset($_SESSION['resposta']);
}
?>

</html>