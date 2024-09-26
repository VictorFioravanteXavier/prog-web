let num = Math.floor(Math.random() * 100);
let escolha = parseInt(prompt('Escolha um número'), 10); // Certifique-se de converter a entrada para um número inteiro

while (escolha !== num) {
  if (escolha > num) {
    console.log('Menor');
  } else if (escolha < num) {
    console.log('Maior');
  }
  escolha = parseInt(prompt('Escolha um outro número'), 10); // Atualiza o valor de escolha
}

console.log('Você acertou');
