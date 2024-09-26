let palavra = prompt('Digite uma palavra');
let vogais = {
  a: 0,
  e: 0,
  i: 0,
  o: 0,
  u: 0 
};

palavra = palavra.toLowerCase().split('');

for (let i = palavra.length - 1; i >= 0; i--) {
  switch (palavra[i]) {
    case 'a':
      vogais['a'] += 1;
      break;
    case 'e':
      vogais['e'] += 1;
      break;
    case 'i':
      vogais['i'] += 1;
      break;
    case 'o':
      vogais['o'] += 1;
      break;
    case 'u':
      vogais['u'] += 1;
      break;
    default:
      break;
  }
}

console.log(vogais);
