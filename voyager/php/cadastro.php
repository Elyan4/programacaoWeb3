<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/styleSub.css">
    <script src="../js/checagemCPF.js"></script>
    <script src="../js/checarSenha.js"></script>


    <title>Cadastro</title>
   
  </head>

  <body>
    <div>
      <h1 id="titulo">Cadastro</h1>
    </div>

    <form method = "POST" action = "processa.php">
     <fieldset class="grupo">
        <div class="campo">
          <label>Insira seu nome</label>
          <input type="text" name="nome" id="nome" placeholder="nome" required maxlength="45"/>
        </div>

        <div class="campo">
          <label>Insira seu sobrenome</label>
          <input
            type="text"
            name="sobrenome"
            id="sobrenome"
            placeholder="sobrenome"
            required maxlength="45"
          />
        </div>
      </fieldset>

      <div class="campo">
        <label>Insira seu email</label>
        <input type="email" name="email" id="email" placeholder="email" required />
      </div>

      <div class="campo">
        <label>Insira seu CPF</label>
        <input type="text" name="cpf" id="cpf" placeholder="CPF" maxlength="11" onblur="verificarCPF(this.value)" required>
        
      </div>
   

      <div class="campo">
        <label>Insira seu telefone</label>
        <input type="tel" name="telefone" id="telefone" placeholder="telefone" required >
        
      </div>

      <div class="campo">
        <label>Escolha uma senha</label>
        <input  type="password" name="senha1" id="senha1" placeholder="senha" required>
      </div>
      
      <button class="confirmar" type="submit" onsubmit="">confirmar</button>

    </form>
  </body>
</html>
