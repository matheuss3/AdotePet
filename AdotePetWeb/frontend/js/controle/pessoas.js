export class ControlePessoas {
  post() {
    const formElement = document.getElementById('cadastrarPessoa')

    const pessoaForm = new FormData(formElement)
    const xhr = new XMLHttpRequest()

    xhr.onload = function () {
      if (xhr.readyState === xhr.DONE) {
        if (xhr.status === 201) {
          alert("Usuário cadastrado com sucesso");
        } else {
          alert("Erro ao cadastrar usuário");
        }
      }
    }

    xhr.open('post', '/AdotePet/AdotePetWeb/backend/api/Pessoas.php')
    xhr.send(pessoaForm)
  }
}