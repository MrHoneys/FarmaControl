<?php

include_once('../conexao/conexao.php');

$sql = "SELECT id, nome, descricao, quantidade, validade FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["descricao"] . "</td>";
        echo "<td>" . $row["quantidade"] . "</td>";
        echo "<td>" . date('d/m/Y', strtotime($row["validade"])) . "</td>";
        echo "
        
        <td>
        
        <a class='editar' href='../pages/editar.php?id=" . $row["id"] . "'>Editar</a> 
        <a class='excluir' href='javascript:void(0);' onclick='confirmarExclusao(" . $row["id"] . ", \"" . addslashes($row["nome"]) . "\")'>Excluir</a>

        <script src='../source/javascript/consultar.js'></script>

        </td>";
    }
} else {
    echo "<tr><td colspan='6'>Nenhum produto encontrado</td></tr>";
}
$conn->close();
?>
