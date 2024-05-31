function confirmarExclusao(id, nomeProduto) {
    if (confirm("Tem certeza que deseja excluir o produto '" + nomeProduto + "' (ID: " + id + ")?")) {
        window.location.href = "http://localhost/FarmaControl/validacao/valida_excluir.php?id=" + id;
    }
}

function filterTable() {
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("productTable");
    tr = table.getElementsByTagName("tr");

    for (i = 1; i < tr.length; i++) { // Começa a partir de 1 para pular o cabeçalho
        tr[i].style.display = "none"; // Inicialmente esconde todas as linhas
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break; // Se encontrar a correspondência, mostra a linha e para de procurar nas outras colunas
                }
            }
        }
    }
}

// Adiciona um evento de entrada ao campo de pesquisa
document.getElementById("searchInput").addEventListener("input", filterTable);
