export class ControleAnimais {
  post(event) {
    event.preventDefault()
    const formElement = document.getElementById('adicionarAnimal')

    const animalForm = new FormData(formElement)
    const xhr = new XMLHttpRequest()

    xhr.onload = function () {
      if (xhr.readyState === xhr.DONE) {
        if (xhr.status === 201) {
          alert("Animal salvo com sucesso");
        } else {
          alert("Erro ao salvar animal");
        }
      }
    }

    xhr.open('post', '/AdotePet/AdotePetWeb/backend/api/Animais.php')
    xhr.send(animalForm)
  }
}