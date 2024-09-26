const numeros = [0,1,2,3,4,5,6,7,8,9]
const simbolos = ['!','@','#',"$",'%','<','¨','&','*']
const letras = ['a','b','c','d','e','f','g']
let senha = ''
let num
let num2
while (senha.length < 25) {
  num = Math.floor(Math.random() * 3)
  switch (num) {
    case 1:
      num2 = Math.floor(Math.random() * numeros.length)
      senha += numeros[num2]
      break;
    case 2:
      num2 = Math.floor(Math.random() * simbolos.length)
      senha += simbolos[num2]
      break;
    case 3:
      num2 = Math.floor(Math.random() * letras.length)
      senha += letras[num2]
      break;
    default:
      break;
  }
}

console.log(senha)