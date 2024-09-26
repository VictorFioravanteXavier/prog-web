let palavra = prompt('Digite uma palavra');
let caracteres = palavra.split('');
let inverso = '';

for (let i = caracteres.length - 1; i >= 0; i--) {
  inverso += caracteres[i];
}

console.log('Palavra invertida:', inverso);
