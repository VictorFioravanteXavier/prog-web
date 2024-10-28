const subitrair_btns = Array.from(document.querySelectorAll('.subitrair'));
const adicionar_btns = Array.from(document.querySelectorAll('.adicionar'));
const num_quantidades = Array.from(document.querySelectorAll('.num-quantidade'));
const produtos = document.getElementsByClassName('produto');
const precoTotal = document.getElementById("totalCarrinho");
const inp_frete = document.getElementById("cep");
const frete_value = document.getElementById("valorFrete");
const inp_cupom = document.getElementById("codigo-promocional");
const cupomAplicado = document.getElementById("cupomAplicado");
const preco_total_produto = document.getElementsByClassName('preco-total');
let total_value = 0;
const preco_total_produtos = document.getElementById('precoProdutos')
const taxa = document.getElementById('taxa')
const valor_cupom = document.getElementById('cupomAplicado')

const att_preco_total = (index) => {
    const precoUnitario = parseFloat(produtos[index].dataset.preco) || 0;
    const quantidade = parseInt(num_quantidades[index].value) || 0;
    const precoTotalProduto = precoUnitario * quantidade;
    
    // Atualiza o preço total do produto
    preco_total_produto[index].innerHTML = `R$ ${precoTotalProduto.toFixed(2)}`;
    
    calcularTotal(); // Atualiza o total sempre que um preço é atualizado
    console.log("AAA")
};

const calcularTotal = () => {
    total_value = 0;

    // Calcula o total com base no preço de cada produto
    Array.from(preco_total_produto).forEach((element) => {
        total_value += parseFloat(element.innerHTML.replace("R$ ", "").replace(",", ".")) || 0;
    });

    preco_total_produtos.innerText = `R$ ${total_value.toFixed(2)}`;

    // Adiciona o valor do frete ao total
    let frete = parseFloat(frete_value.innerText) || 0;
    total_value += frete;

    // Atualiza o preço total na interface
    precoTotal.innerText = `R$ ${total_value.toFixed(2)}`;
    taxa.innerHTML = `R$ ${(total_value*0.2).toFixed(2)}`;
};

document.addEventListener("DOMContentLoaded", () => {
    // Inicializa o preço total de cada produto
    Array.from(num_quantidades).forEach((_, index) => {
        att_preco_total(index);
    });

    subitrair_btns.forEach((element, index) => {
        if (element) {
            element.addEventListener('click', () => {
                const quantidadeAtual = parseInt(num_quantidades[index].value);
                if (quantidadeAtual > 1) {
                    num_quantidades[index].value = quantidadeAtual - 1;
                    att_preco_total(index); // Atualiza o preço total do produto
                }
            });
        }
    });

    adicionar_btns.forEach((element, index) => {
        if (element) {
            element.addEventListener('click', () => {
                const quantidadeAtual = parseInt(num_quantidades[index].value);
                num_quantidades[index].value = quantidadeAtual + 1;
                att_preco_total(index); // Atualiza o preço total do produto
            });
        }
    });

    num_quantidades.forEach((element, index) => {
        if (element) {
            element.addEventListener('change', () => {
                att_preco_total(index); // Atualiza o preço total quando o valor é alterado manualmente
            });
        }
    });
});

// Função para calcular o frete
const calcularFrete = () => {
    const cep = inp_frete.value;

    if (cep.length !== 8) {
        alert("Digite um CEP válido com exatamente 8 dígitos.");
        return;
    }

    let frete;

    switch (cep) {
        case '88495000':
            frete = 30;
            break;
        
        case '88900071':
            frete = 50;
            break;

        case '88490000':
            frete = 3000;
            break;
    
        default:
            alert("CEP inválido, o sistema é limitado");
            return; 
    }
    
    frete_value.innerText = frete.toFixed(2);
    calcularTotal(); // Atualiza o total após calcular o frete
};

// Função para aplicar cupom de desconto
let cupomjaAplicado = false; // Variável para verificar se o cupom foi aplicado

const aplicarCupon = () => {
    const cupom = inp_cupom.value;

    // Se já houver um cupom aplicado, não permite aplicar outro
    if (cupomjaAplicado) {
        alert("Um cupom já foi aplicado. Você não pode aplicar outro.");
        return;
    }

    // Resetando o valor do cupom caso já tenha um aplicado
    const valor_cupom = document.getElementById("cupomAplicado");
    valor_cupom.innerText = `-R$ 0,00`; // Reinicia o valor do cupom

    if (cupom === 'DESCONTO10') {
        total_value -= 10; // Aplica desconto de R$10
        precoTotal.innerText = `R$ ${total_value.toFixed(2)}`; // Atualiza o total
        valor_cupom.innerText = `-R$ 10,00`; // Atualiza o valor do cupom
        cupomjaAplicado = true; // Marca que um cupom foi aplicado
    } else if (cupom === "semfrete" && frete_value.innerText !== 'Coloque um cep') {
        const frete = parseFloat(frete_value.innerText) || 0; // Obtém o valor do frete
        total_value -= frete; // Aplica desconto do valor do frete
        precoTotal.innerText = `R$ ${total_value.toFixed(2)}`; // Atualiza o total
        valor_cupom.innerText = `-R$ ${frete.toFixed(2)}`; // Atualiza o valor do cupom
        cupomjaAplicado = true; // Marca que um cupom foi aplicado
        console.log('sss')
    } else {
        alert("DESCONTO INVÁLIDO");
    }
};