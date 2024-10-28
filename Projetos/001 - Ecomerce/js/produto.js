document.addEventListener("DOMContentLoaded", function() {
    const precoUnitario = parseFloat(document.getElementById("preco-unitario").textContent.replace("R$", "").replace(",", ".").trim());
    const quantidadeElement = document.getElementById("quantidade");
    const totalElement = document.getElementById("total");
    totalElement.textContent = `R$${precoUnitario}`
    let quantidade = 1;

    // Função para atualizar o total
    function atualizarTotal() {
        const total = (quantidade * precoUnitario).toFixed(2).replace(".", ",");
        totalElement.textContent = `R$${total}`;
    }

    // Adicionar quantidade
    document.getElementById("btn-adicionar").addEventListener("click", function() {
        quantidade++;
        quantidadeElement.textContent = quantidade;
        atualizarTotal();
    });

    // Subtrair quantidade
    document.getElementById("btn-subtrair").addEventListener("click", function() {
        if (quantidade > 1) {
            quantidade--;
            quantidadeElement.textContent = quantidade;
            atualizarTotal();
        }
    });
});
