import { ControleAnimais } from './controle/animais.js'

const buttonElement = document.querySelector('form button')

function salvaAnimal(botao) {
  botao.preventDefault()

  new ControleAnimais().post(botao)
}
console.log(buttonElement)
buttonElement.addEventListener('click', salvaAnimal)