fetch("http://localhost/devweb/backend/Animais.php")
    .then(response => {
        return response.json()
    })
    .then(animais => setarDados(animais))
    .catch(error => console.log(error))

function setarDados(animais){
    let elemH = document.querySelector('.animal.desativado')
    elemH.classList.remove('desativado')
    
    let raca = document.querySelector('.raca')
    let nome = document.querySelector('.nome')
    let data = document.querySelector('.data')
    let desc = document.querySelector('.desc')
    let cr= 1
    animais.forEach((elem) =>{
        if(cr == 1){
            console.log(elem)
            raca.innerHTML = "Raça: " + elem.raca
            nome.innerHTML = "Nome: " + elem.nome
            data.innerHTML = "Data de nascimento: " + elem.dt_nascimento
            desc.innerHTML = elem.descricao
            cr = 0
        }
        else{
            var elementoClone = elemH.cloneNode(true);
            let filhos = elementoClone.childNodes
            let para = filhos[3]
            let p = para.childNodes
            //console.log(para)
            p.forEach((tag)=>{
                if(tag.classList == 'raca'){
                    tag.innerHTML = "Raça: " + elem.raca
                }
                else if(tag.classList == 'nome'){
                    tag.innerHTML = "Nome: " + elem.nome
                } 
                else if(tag.classList == 'data'){
                    tag.innerHTML = "Data de nascimento: " + elem.dt_nascimento
                }
                else if(tag.classList == 'desc'){
                    tag.innerHTML = elem.descricao
                }
            })
            let animais = document.querySelector('.animais') 
            animais.appendChild(elementoClone);
        }
        
    })
    
}
