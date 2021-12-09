<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/cadastro-animal.css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <header>
        <div class="logo">
          <span class="material-icons-outlined">pets</span>
          <h1>AdotePet</h1>
        </div>
        <div>
          <span class="material-icons-outlined">person_outline</span>
          Matheus
          <span class="material-icons-outlined">logout</span>
        </div>
    </header>
    <body>
      <br>
      <h1 style="text-align: center;">Cadastro de Animais</h1>
      <form action="../backend/api/Animais.php" method="post">  
        <div class="container">
            <div class="perguntas">
                <label>Nome do pet:
                    <input type="text" name="nome">
                  </label>
                  <br>
                  <label>Espécie:
                    <input type="text" name="especie">
                  </label>
                  <br>
                  <label>Raça:
                    <input type="text" name="raca">
                  </label>
                  <br>
                  <label>Idade :
                    <input type="date" name="dt_nascimento">
                  </label>
            </div>
            
            <div class="desc">
                <label for="avatar">Foto do pet:<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                </label>
                <br><br><br><br>
                <label >Descrição do pet:
                    <textarea class="description" style="align-content: left;" type="text" name="descricao"> </textarea>
                  </label>
                 
            </div>

        </div>
        <div class="botao">

          <button type="submit"><b>Confirmar</b></button>
        </div>
      </form>
        
         
        
    </body>
</html>
