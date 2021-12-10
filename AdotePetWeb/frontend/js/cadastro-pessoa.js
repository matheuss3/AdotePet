import { ControlePessoas } from './controle/pessoas.js'

const buttonElement = document.querySelector('form .botoes button')

function salvaPessoa(botao) {
  botao.preventDefault()

  new ControlePessoas().post()
}


function exibeComprovanteResidencia(e) {
  const divElement = document.getElementById('comprovante')

  if (e.value === 'D') {
      divElement.setAttribute('style', 'display: none')
  } else {
      divElement.setAttribute('style', 'display: block')
  }
}


buttonElement.addEventListener('click', salvaPessoa)