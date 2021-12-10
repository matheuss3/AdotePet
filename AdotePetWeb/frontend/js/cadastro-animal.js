import { ControleAnimais } from './controle/animais.js'

const buttonElement = document.querySelector('form button')

function salvaAnimal(botao) {
  botao.preventDefault()

  new ControleAnimais().post(botao)
}

buttonElement.addEventListener('click', salvaAnimal)