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
    
    preco_total_produto[index].innerHTML = `R$ ${precoTotalProduto.toFixed(2)}`;
    
    calcularTotal();
};

const calcularTotal = () => {
    total_value = 0;

    Array.from(preco_total_produto).forEach((element) => {
        total_value += parseFloat(element.innerHTML.replace("R$ ", "").replace(",", ".")) || 0;
    });

    preco_total_produtos.innerText = `R$ ${total_value.toFixed(2)}`;

    let frete = parseFloat(frete_value.innerText) || 0;
    total_value += frete;

    precoTotal.innerText = `R$ ${total_value.toFixed(2)}`;
    taxa.innerHTML = `R$ ${(total_value*0.2).toFixed(2)}`;
};

document.addEventListener("DOMContentLoaded", () => {
    Array.from(num_quantidades).forEach((_, index) => {
        att_preco_total(index);
    });

    subitrair_btns.forEach((element, index) => {
        if (element) {
            element.addEventListener('click', () => {
                const quantidadeAtual = parseInt(num_quantidades[index].value);
                if (quantidadeAtual > 1) {
                    num_quantidades[index].value = quantidadeAtual - 1;
                    att_preco_total(index); 
                }
            });
        }
    });

    adicionar_btns.forEach((element, index) => {
        if (element) {
            element.addEventListener('click', () => {
                const quantidadeAtual = parseInt(num_quantidades[index].value);
                num_quantidades[index].value = quantidadeAtual + 1;
                att_preco_total(index); 
            });
        }
    });

    num_quantidades.forEach((element, index) => {
        if (element) {
            element.addEventListener('change', () => {
                att_preco_total(index); 
            });
        }
    });
});

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
    calcularTotal(); 
};

let cupomjaAplicado = false; 

const aplicarCupon = () => {
    const cupom = inp_cupom.value;

    if (cupomjaAplicado) {
        alert("Um cupom já foi aplicado. Você não pode aplicar outro.");
        return;
    }

    const valor_cupom = document.getElementById("cupomAplicado");
    valor_cupom.innerText = `-R$ 0,00`; 

    if (cupom === 'DESCONTO10') {
        total_value -= 10; 
        precoTotal.innerText = `R$ ${total_value.toFixed(2)}`; 
        valor_cupom.innerText = `-R$ 10,00`; 
        cupomjaAplicado = true; 
    } else if (cupom === "semfrete" && frete_value.innerText !== 'Coloque um cep') {
        const frete = parseFloat(frete_value.innerText) || 0;
        total_value -= frete; 
        precoTotal.innerText = `R$ ${total_value.toFixed(2)}`; 
        valor_cupom.innerText = `-R$ ${frete.toFixed(2)}`;
        cupomjaAplicado = true; 
        console.log('sss')
    } else {
        alert("DESCONTO INVÁLIDO");
    }
};