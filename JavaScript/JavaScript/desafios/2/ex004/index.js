let tamanho = 5;

for (let i = 0; i < tamanho; i++) {
  let linha = '';
  for (let j = 0; j < tamanho; j++) {
    linha += '*';
  }
  console.log(linha);
}


let altura = 5;

for (let i = 1; i <= altura; i++) {
  let linha = '';
  for (let j = 0; j < i; j++) {
    linha += '*';
  }
  console.log(linha);
}
