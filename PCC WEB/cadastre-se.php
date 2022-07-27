<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="login.css">
    
    
    <title>Noff HOTEL</title>
    <style>
      .bg-gradient {
        background: rgb(255, 217, 0);
      }

      body{
  background-color: rgb(92, 92, 92);
}
    
    </style>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-gradient">
            <div>
              <img class="#" src="logo.png" alt="logo da loja" width="110px, 50px">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="quartos.html">QUARTOS <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sobreNos.html">SOBRE-NÓS</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    LOGIN
                  </a>
                  <div class="dropdown-menu" style="background-color: black;" aria-labelledby="navbarDropdownMenuLink">
                    <a class ="dropdown-item" style="color:rgb(255, 217, 0); background-color: black;" href="entrar.html">Entrar</a>
                    <a class="dropdown-item"  style="color:rgb(255, 217, 0); background-color: black;" href="cadastre-se.html">Cadastrar-se</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
    </header>

    <form action="">
      <fieldset>
        <legend><b>Cadastro</b></legend>
          <br>
          <div class="inputBox">
              <label for="nome" class="labelInput">Nome</label>
              <input type="text" name="nome" id="nome" class="inputUser" required>
          </div>
          <br><br>
          <div class="inputBox">
            <label for="sobrenome" class="labelInput">Sobrenome</label>
              <input type="text" name="sobrenome" id="sobrenome" class="inputUser" required>
          </div>
          <br><br>
          <div class="inputBox">
            <label for="email" class="labelInput">E-mail</label>
              <input type="text" name="email" id="email" class="inputUser" required>
          </div>
          <br><br>
          <div class="inputBox">
            <label for="senha" class="labelInput">Senha</label>
              <input type="password" name="senha" id="senha" class="inputUser" required>
          </div>
          <br><br>
          <div class="inputBox">
            <label for="telefone" class="labelInput">Telefone</label>
              <input type="tel" name="telefone" id="telefone" class="inputUser" required>
          </div>
          <p>Sexo:</p>
          <label for="feminino">Feminino</label>
          <input type="radio" id="feminino" name="genero" value="feminino" required>
          <br>
          <label for="masculino">Masculino</label>
          <input type="radio" id="masculino" name="genero" value="masculino" required>
          <br>
          <label for="outro">Outros</label>
          <input type="radio" id="outro" name="genero" value="outro" required>
          <br><br>
          <label for="data_nascimento"><b>Data de Nascimento:</b></label>
          <input type="date" name="data_nascimento" id="data_nascimento" required>
          <br><br>
          <button type="button" class="btn btn-outline-warning">Cadastrar</button>

          <br><br>

          </div>
      </fieldset>
  </form>

    <footer>
      <div id="sobre nos" class="container-fluid text-white" style="background-color:black;">
            <div class="row" id="rodape">
              <div class="col-4 p-3">
                <h2>Quem Somos</h2>
                <p>Nós da Rafon Hotel, desempenhamos em oferecer uma solução para pessoas que buscam se hospedar da melhor forma possível, sem desembolsar muito dinheiro. Com mais de 20 anos no mercado, unimos o útil ao agradável sendo assim mais fácil para o hotel tornando-o visível, e o hospede ter uma experiência inesquecível.</p>
              </div>
              <div class="col-4 p-3" >
                <h2>Endereço Do Hotel</h2>
                <p>Rua Leopoldo Rosenfeld,</p> 
                <p>Numero 2022, bairro Planalto</p>
                <p>Gramado / RS </p>
      
              </div>
              <div class="col-4 p-3" >
                <h2>Suporte</h2>
                <p>enzosjost@gmail.com</p>
                <p>rafaelreichowg@gmail.com</p>
                <p>(45) 99810-7358 </p>
                <p>(45) 99930-5364 </p>
              </div>
            </div>
          </div>
    </footer>
    <!--Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>