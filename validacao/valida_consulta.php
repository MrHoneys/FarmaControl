<?php
// Conexão com o banco de dados (substitua as informações conforme necessário)
include_once('../conexao/conexao.php');

// Query para selecionar os dados da tabela produtos
$sql = "SELECT id, nome, descricao, quantidade, validade FROM products";
$result = $conn->query($sql);

// Verifica se existem linhas na consulta
if ($result->num_rows > 0) {
    // Exibe os dados encontrados na tabela
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["descricao"] . "</td>";
        echo "<td>" . $row["quantidade"] . "</td>";
        echo "<td>" . date('d/m/Y', strtotime($row["validade"])) . "</td>";
        echo "
        
        <td>
        
        <a class='editar' href='../validacao/valida_editar.php?id=" . $row["id"] . "'>Editar</a> 
        <a class='excluir' href='javascript:void(0);' onclick='confirmarExclusao(" . $row["id"] . ", \"" . addslashes($row["nome"]) . "\")'>Excluir</a>

        <script src='../source/javascript/consultar.js'></script>

        </td>";
    }
} else {
    echo "<tr><td colspan='6'>Nenhum produto encontrado</td></tr>";
}
// Fecha a conexão com o banco de dados
$conn->close();
?>
