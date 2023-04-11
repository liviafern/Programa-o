<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">IF BAIANO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Inscrição</a>
        </li>
                 <li class="nav-item">
          <a class="nav-link" href="#">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Matriculas</a>
        </li>    
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-3" style="background-color: #ffc0cb">
  <h2>Formulario </h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">Nome:</label>
      <input type="email" class="form-control" id="email" placeholder="Escreva seu nome" name="email">
    </div>
    <div class="mb-3" style="background-color: #ffc0cb">
      <label for="pwd">Telefone:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Telefone" name="pswd">
    </div>
    <div class="form-check mb-3 " style="background-color: #ffc0cb">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Salvar dados
      </label>
    </div>
    
    <button type="button" class="btn btn-dark">Concluir</button>
    
  </form>
</div>

</body>
</html>
