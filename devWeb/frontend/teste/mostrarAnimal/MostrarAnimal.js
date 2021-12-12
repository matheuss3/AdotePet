fetch("http://localhost/devweb/backend/Animais.php")
    .then(response => {
        return response.json()
    })
    .then(animais => console.log(animais))
    .catch(error => console.log(error))

function setarDados(animais){
    
}