<?php

include 'conexao.php';

$sql = "SELECT titulo, autor, editora, qtde_disponivel FROM LIVROS";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Livros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Consulta Livros</h1>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editora</th>
                    <th>Quantidade Disponível</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>". $row['titulo']."</td>";
                        echo "<td>". $row['autor']."</td>"; 
                        echo "<td>". $row['editora']."</td>"; 
                        echo "<td>". $row['qtde_disponivel']."</td>"; 
                        echo "</tr>"; 
                    }
                }else{
                    echo"<tr><td colspan='4'>Nenhum livro encontrado</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>