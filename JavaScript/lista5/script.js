const produtos = document.getElementsByClassName('produto');
const botoesAddCarrinho = document.getElementsByClassName('adicionar-carrinho');
const carrinho = [];
const itensCarrinho = document.getElementById("itensCarrinho");
const precoTotal = document.getElementById("totalCarrinho");
const inp_frete = document.getElementById("cep");
const frete_value = document.getElementById("valorFrete");
let total_value = 0;
const inp_cupom = document.getElementById("cupom");
const cupomAplicado = document.getElementById("cupomAplicado");

const attPrecoTotal = () => {
    total_value = 0;

    carrinho.forEach(element => {
        total_value += element.preco * element.quantidade;
    });

    let frete = parseFloat(frete_value.innerText) || 0;
    total_value += frete;

    precoTotal.innerText = total_value.toFixed(2); 
};

const atualizarQuantidade = (input, elemento) => {
    const novaQuantidade = parseInt(input.value);

    if (!isNaN(novaQuantidade) && novaQuantidade > 0) {
        elemento.quantidade = novaQuantidade; 
        attPrecoTotal(); 
    } else {
        input.value = 1;
        elemento.quantidade = 1; 
        attPrecoTotal(); 
    }
};

const addItemCarrinho = (item) => {
    const produto = item.parentElement;

    if (produto) {
        const existingProduct = carrinho.find(i => i.id === produto.dataset.id);
        if (!existingProduct) {
            carrinho.push({
                id: produto.dataset.id,
                nome: produto.dataset.nome,
                preco: parseFloat(produto.dataset.preco), 
                quantidade: 1,
            });
        } else {
            existingProduct.quantidade += 1;
        }

    } else {
        alert("Produto não encontrado.");
        return;
    }

    itensCarrinho.innerHTML = '';

    carrinho.forEach(element => {
        itensCarrinho.innerHTML += `
            <div class="item-carrinho">
                <div>${element.nome}</div>
                <div>Preço: R$ ${element.preco.toFixed(2)}</div>
                <div>
                    <input 
                        type="number" 
                        value="${parseInt(element.quantidade)}" 
                        min="1"
                        onchange="atualizarQuantidade(this, carrinho.find(i => i.id === '${element.id}'))">
                </div>
            </div>
        `;
    });

    attPrecoTotal();
};

Array.from(botoesAddCarrinho).forEach(element => {
    element.addEventListener('click', function() {
        addItemCarrinho(this);
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
    attPrecoTotal(); 
};

// Função para limpar o carrinho
const limparCarrinho = () => {
    carrinho.length = 0; 
    itensCarrinho.innerHTML = ''; 
    total_value = 0; 
    precoTotal.innerText = '0.00'; 
    frete_value.innerText = '0.00'; 
    inp_frete.value = ''; 
    cupomAplicado.style.display = 'none';
    inp_cupom.value = ''; 
};

const aplicarCupon = () => {
    const cupom = inp_cupom.value;
    if (cupomAplicado.style.display == 'block') {
        return;
    }
    if (cupom === 'DESCONTO10'){
        cupomAplicado.style.display = 'block';
        total_value -= 10;
        precoTotal.innerText = total_value.toFixed(2);
        return;
    } else {
        alert("DESCONTO INVÁLIDO");
    }
};
