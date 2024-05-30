function confirmarExclusao(id, nomeProduto) {
    if (confirm("Tem certeza que deseja excluir o produto '" + nomeProduto + "' (ID: " + id + ")?")) {
        window.location.href = "http://localhost/FarmaControl/validacao/valida_excluir.php?id=" + id;
    }
}
